import MySQLdb as mdb
import time
import serial

con = mdb.connect('localhost','root','q1w2e3r4','smarthome')

ser = serial.Serial('/dev/ttyAMA0',9600, timeout=1)

while 1:
  x=ser.readline()
  nums = [int(n) for n in x. split('/')]
  print x[0]
  print x[1]
  print x[2]

  with con:
    cur = con.cursor()
    cur.execute("insert into test (val1, val2, val3) value (%d, %d, %d)",(x[0],x[1],x[2]))

