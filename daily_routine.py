
import datetime
def getdate():
    return datetime.datetime.now()

def lock(k):
    if(k == 1):
        x = int(input("\nPress 1 for food and 2 for excercise: "))
        if(x == 1):
            value = str(input("\nTell me: k khayeu\n"))
            with open("18_hm_sys/ram-food.txt", "at") as f:
                f.write("["+str(getdate().strftime("%Y-%m-%d %H:%M"))+"]:   "+value+"\n")
            print("written succesfully :)")
        elif(x == 2):
            value = str(input("\nTell me: k gareu\n"))
            with open("18_hm_sys/ram-ex.txt", "at") as e:
                e.write("["+str(getdate().strftime("%Y-%m-%d %H:%M"))+"]:   "+value+"\n")
            print("written succesfully :)")
        else:
            print("Invalid input!")
        
    if(k == 2):
        x = int(input("\nPress 1 for food and 2 for excercise: "))
        if(x == 1):
            value = str(input("\nTell me: k khayeu\n"))
            with open("18_hm_sys/sita-food.txt", "at") as f:
                f.write("["+str(getdate().strftime("%Y-%m-%d %H:%M"))+"]:   "+value+"\n")
            print("written succesfully :)")
        elif(x == 2):
            value = str(input("\nTell me: k gareu\n"))
            with open("18_hm_sys/sita-ex.txt", "at") as e:
                e.write("["+str(getdate().strftime("%Y-%m-%d %H:%M"))+"]:   "+value+"\n")
            print("written succesfully :)")
        else:
            print("Invalid input!")
        
    if(k == 3):
        x = int(input("\nPress 1 for food and 2 for excercise: "))
        if(x == 1):
            value = str(input("\nTell me: k khayeu\n"))
            with open("18_hm_sys/ravan-food.txt", "at") as f:
                f.write("["+str(getdate().strftime("%Y-%m-%d %H:%M"))+"]:   "+value+"\n")
            print("written succesfully :)")
        elif(x == 2):
            value = str(input("\nTell me: k gareu\n"))
            with open("18_hm_sys/ravan-ex.txt", "at") as e:
                e.write("["+str(getdate().strftime("%Y-%m-%d %H:%M"))+"]:   "+value+"\n")
            print("written succesfully :)")
        else:
            print("Invalid input!")

def retrive(k):
    if(k == 1):
        x = int(input("\nPress 1 for food and 2 for excercise: "))
        if(x == 1):
            print("\nRam's food")
            with open("18_hm_sys/ram-food.txt", "rt") as f:
                print(f.read())
        elif(x == 2):
            print("\nRam's excercise")
            with open("18_hm_sys/ram-ex.txt", "rt") as e:
                print(e.read())
        else:
            print("Invalid input!")
        
    if(k == 2):
        x = int(input("\nPress 1 for food and 2 for excercise: "))
        if(x == 1):
            print("\nSita's food")
            with open("18_hm_sys/sita-food.txt", "rt") as f:
                print(f.read())
        elif(x == 2):
            print("\nSita's excercise")
            with open("18_hm_sys/sita-ex.txt", "rt") as e:
                print(e.read())
        else:
            print("Invalid input!")
        
    if(k == 3):
        x = int(input("\nPress 1 for food and 2 for excercise: "))
        if(x == 1):
            print("\nRavan's food")
            with open("18_hm_sys/ravan-food.txt", "rt") as f:
                print(f.read())
        elif(x == 2):
            print("\nRavan's excercise")
            with open("18_hm_sys/ravan-ex.txt", "rt") as e:
                print(e.read())
        else:
            print("Invalid input!")

        



print("Health management system\n(Excercise & Food Routine)")
a = int(input("\nPress 1 for lock and 2 for retrive the value: "))
if(a == 1):
    b = int(input("\nPress 1 for Ram\nPress 2 for Sita\nPress 3 for Ravan: "))
    lock(b)
elif(a == 2):
    b = int(input("\nPress 1 for Ram\nPress 2 for Sita\nPress 3 for Ravan: "))
    retrive(b)
else:
    print("Invalid input!")