#!/usr/bin/env python3
# import MyPyDHT
from oauth2client.service_account import ServiceAccountCredentials
import gspread
import time
import json
import sys
import math
import datetime
import matplotlib
import sys
#sys.path.append(‘/ home/pi/.local/lib/python3.7/site-packages’)
#sys.path.append(os.path.join(os.path.dirname(__file__), '..'))

# Force matplotlib to not use any Xwindows backend.
matplotlib.use('Agg')
EMULATE_HX711 = False
# キャリブレーションした値の出力
referenceUnit = 510.0
# hx711を使用するためのソース
if not EMULATE_HX711:
    import RPi.GPIO as GPIO
    from hx711 import HX711
else:
    from emulated_hx711 import HX711


def cleanAndExit():
    print("Cleaning...")
    if not EMULATE_HX711:
        GPIO.cleanup()
    print("Bye!")
    sys.exit()


hx = HX711(5, 6)
hx.set_reading_format("MSB", "MSB")
hx.set_reference_unit(referenceUnit)
hx.reset()
hx.tare()
print("Tare done! Add weight now...")
key_name = '/home/pi/Desktop/8cology_scale/hx711py/cology-206480b62079.json'
sheet_name = 'raspberrypiconnect'

#APIにログイン
scope = ['https://spreadsheets.google.com/feeds','https://www.googleapis.com/auth/drive']
credentials = ServiceAccountCredentials.from_json_keyfile_name(key_name, scope)
gc = gspread.authorize(credentials)
# SPREADSHEET_KEY = ‘1luiBG6DEPzRhEpne8Rjwp3fdx1hKtQBJzh_mGl3ejFc’
worksheet = gc.open(sheet_name).worksheet('fromPi')
while True:
    try:
        # val = hx.get_weight(5)
        # print(val)
        comp = []
        val = [0, 0]
        val[0] = datetime.datetime.now()
        val[1] = hx.get_weight(5)
        #print(str(val[1]))
        # print(‘now time ’ + str(val[0]) + ‘,’ + ' now weight ' + str(val[1]))
        # if val[1] >= 46.5 and val[1] <= 48.0:
        #     value_true = 1
        #     print(str(val[1]),str(value_true))
        #     worksheet.update_cell(2, 1, value_true)
        #     break
        # else :
        #     value_false = 0
        #     print(str(val[1]), str(value_false))
        comp = val[1]
        #print("init", val[1])
        print(val[1])
        if comp > 10:
            # print(“comp_start”,val[1])
            if val[1] >= 46.5 and val[1] <= 48.0:
                value_true = 1
                print(str(val[1]))
                worksheet.update_cell(2, 1, value_true)
                #break
            else:
                value_false = 0
                print(str(val[1]))
                worksheet.update_cell(2, 1, value_false)
                #break

        time.sleep(0.5)
        # 行番号と列番号を指定してセルの値を更新する
        # worksheet.update_cell(2, 1, val[1])
        hx.power_down()
        hx.power_up()
    except (KeyboardInterrupt, SystemExit):
        cleanAndExit()
