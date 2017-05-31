import signal
import sys
import time
import obd
from obd import OBDStatus

def sigterm_handler(signal, frame):
    sys.exit(0)

signal.signal(signal.SIGTERM, sigterm_handler)

def connect():
    connection = obd.OBD()
    print connection.status()
    while connection.status() != OBDStatus.CAR_CONNECTED:
        connection = obd.OBD()
        print connection.status()
        time.sleep(5)
    return connection

if __name__ == "__main__":
    try:
        while True:
            connection = connect()
            while True:
                r = connection.supports(obd.commands.RPM)
                print r
                if r == False:
                    with open("../stats/rpm.txt", "w+") as f:
                        f.write("Off")
                    connection.close()
                    connection = connect()
                else:
                    with open("../stats/rpm.txt", "w+") as f:
                        f.write(str(connection.query(obd.commands.RPM)))
                time.sleep(1)
    except KeyboardInterrupt:
        print "Good bye"
        connection.close()
