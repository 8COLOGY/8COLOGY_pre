import time
import sys
import RPi.GPIO as GPIO
from hx711py.hx711 import HX711
#from oled import Oled

PIN_DAT = 5
PIN_CLK = 6

# referenceUnit = 1
#referenceUnit = 473
referenceUnit = 510

def cleanAndExit():
    print("Cleaning...")
    GPIO.cleanup()
    print("Bye!")
    sys.exit()


def main():

    # 表示デバイスの作成
    #panel = Oled()

    hx = HX711(PIN_DAT, PIN_CLK)

    # データの並び順を指定
    hx.set_reading_format("MSB", "MSB")
    hx.set_reference_unit(referenceUnit)
    hx.reset()
    hx.tare()

    print("Tare done! Add weight now...")

    while True:
        try:
            # Prints the weight.
            val = hx.get_weight(5)
            print(val)
            # データの表示
            #panel.display_weights(val)

            hx.power_down()
            hx.power_up()
            time.sleep(0.1)

        except (KeyboardInterrupt, SystemExit):
            #panel.display_clear()
            cleanAndExit()


if __name__ == "__main__":
    main()
