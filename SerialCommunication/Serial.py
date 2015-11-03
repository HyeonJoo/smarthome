import MySQLdb as mdb
import time
import serial

con = mdb.connect('localhost','root','q1w2e3r4','smarthome')

ser = serial.Serial('/dev/ttyACM0',115200, timeout=2)


while 1:
  x=ser.readline()
  
  try:
    nums = [int(n) for n in x. split('/')]

    with con:
      cur = con.cursor()

      if nums[0]==1 and len(nums)==17:
        cur.execute("insert into general (light1, light2, light3, light4, bedlight, aircon, heater, window, stove1, stove2, water, alarm, hour, minute, ziro, temper, outside) value (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",(nums[1], nums[2], nums[3], nums[4], nums[5], nums[6], nums[7], nums[8], nums[9], nums[10], nums[11], nums[12], nums[13], nums[14], nums[15], nums[16], 0))
      elif nums[0]==2 and len(nums)==3:
        cur.execute("insert into general (ziro, temper, outside) value (%s, %s, %s)",(nums[1],nums[2],1))
      elif nums[0]==3 and len(nums)==9:
        cur.execute("insert into current (light1, light2, light3, light4, bedlight, aircon, heater, window) value (%s, %s, %s, %s, %s, %s, %s, %s)",(nums[1],nums[2],nums[3],nums[4],nums[5],nums[6],nums[7],nums[8]))

#    print(nums[0])
#    print(nums[1])
#   print(nums[2])

  except ValueError:
    pass

#  with con:
#   cur = con.cursor()
#   cur.execute("insert into test (val1, val2, val3) value (%d, %d, %d)",(x[0],x[1],x[2]))

