import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)
GPIO.setup(4,GPIO.OUT)
GPIO.setup(17,GPIO.OUT)

for x in range (0,10):
	for x in range(0,5):
		GPIO.output(4,GPIO.HIGH)
		time.sleep(1)
		GPIO.output(4,GPIO.LOW)
		GPIO.output(17,GPIO.HIGH)
		time.sleep(1)
		GPIO.output(17,GPIO.LOW)
	for x in range(0,10):
		GPIO.output(4,GPIO.HIGH)
		time.sleep(.4)
		GPIO.output(4,GPIO.LOW)
		GPIO.output(17,GPIO.HIGH)
		time.sleep(.4)
		GPIO.output(17,GPIO.LOW)
	for x in range (0,20):
		GPIO.output(4,GPIO.HIGH)
		time.sleep(.3)
		
		GPIO.output(17,GPIO.HIGH)
		time.sleep(.3)
		GPIO.output(4,GPIO.LOW)
		GPIO.output(17,GPIO.LOW)
		time.sleep(.3)
	for x in range (0,50):
		GPIO.output(4,GPIO.HIGH)
		time.sleep(.2)
		GPIO.output(4,GPIO.LOW)
		GPIO.output(17,GPIO.HIGH)
		time.sleep(.2)
		GPIO.output(17,GPIO.LOW)
GPIO.output(17,GPIO.LOW)
GPIO.output(4,GPIO.LOW)