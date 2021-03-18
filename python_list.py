# python List..
imran = ["Imran", "Hosen", "Web", "Developer"]
if "Web" in imran:
  print('Web is in the list here')
print(imran[2:4])
imran.append("PHP Developer") #add list with in Item
for i in imran:
  print(i)
print(len(imran))

imran[2] = "PyThon"
print(imran[2]+" Developer")

imran.insert(0, "Md.") #insert with in the list in first index
print(imran[0])
imran.remove("Hosen") #Remove List in this Item
imran.pop() # Remove in list Item
del imran[0] #Delete First Index
print(imran)

hosen = imran.copy()
print(hosen)

python = ["SQL", "Javascript", "jQuery"]
list = hosen + python
print(list)

list.reverse()
print(list)

imran.clear()
print(imran)

del imran
print(imran)

# Programming "Python" Keboard Keyword Key Type with PyAutoGUI packeges 
import pyautogui
import time
message = 3
while message > 0:
    time.sleep(4)
    pyautogui.typewrite("I need you")
    time.sleep(2)
    pyautogui.press('enter')

    message = message - 1
 # End

# Python with Image Menage with python packeges pillow
from PIL import Image
me = Image.open('me.png')
bg = Image.open('ifel.jpg')
bg.paste(me, (0,0), me)
#bg.save('imran.jpg')
bg.show()
#End

#Python Tuple Hackrrank
n= int(input())
x=[int(i) for i in input().split(" ")]
t=tuple(x)
print(hash(t))
#end tuple

#Python Turtle use to Love Sign
#first install : pip install pythonturtle
from turtle import *
color("red")
begin_fill()
left(50)
forward(100)
circle(40, 180)
left(260)
circle(40, 180)
forward(100)
end_fill()
done()
#End Python Turtle use to Love Sign

#///////////////////////////////////// String Validators /////////
if __name__ == '__main__':
    s = input()
    print(any([i.isalnum() for i in s]))
    print(any([i.isalpha() for i in s]))
    print(any([i.isdigit() for i in s]))
    print(any([i.islower() for i in s]))
    print(any([i.isupper() for i in s]))
    
#////////////////////////////  Text Alignment /////////////
#Replace all ______ with rjust, ljust or center.

thickness = int(input()) #This must be an odd number
c = 'I'

#Top Cone
for i in range(thickness):
    print((c*i).rjust(thickness-1)+c+(c*i).ljust(thickness-1))

# Top Pillars
for i in range(thickness + 1):
    print((c * thickness).center(thickness * 2) + (c * thickness).center(thickness * 6))

# Middle Belt
for i in range((thickness + 1) // 2):
    print((c * thickness * 5).center(thickness * 6))

# Bottom Pillars
for i in range(thickness + 1):
   print((c * thickness).center(thickness * 2) + (c * thickness).center(thickness * 6))

# Bottom Cone
for i in range(thickness):
    print(((c * (thickness - i - 1)).rjust(thickness) + c + (c * (thickness - i - 1)).ljust(thickness)).rjust( thickness * 6))
    
    # //////////////////------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
 from itertools import permutations
s,n = input().split(' ')
#  print (list(permutations(sorted(s),int(n))))

for i in list(permutations(sorted(s),int(n))):
    print(''.join(i))
   # ////////////////// ******** Itertools Combinations *********\\\\\\\\\\\\\\\\\\\\\
from itertools import combinations

A,N = input().split(' ')

for i in range(1, int(N) + 1):
    combine = list(combinations(sorted(A),i))
    for H in combine:
        print(''.join(H))
   # /////////////// ********** Itertools with groupby() *********************\\\\\\\\\\\\\\\\
from itertools import *
n=input()
for i,j in groupby(n):
   print(tuple([len(list(j)),int(i)]), end=" ")
    
  #/////////////////////// ***********  ***********\\\\\\\\\\\\
  
  import cmath
c=complex(input().strip())
res = cmath.polar(c)

print(res[0])
print(res[1])

#////////////////////

def average(array):
 array=set(array)
 return  sum(array)/len(array)

if __name__ == '__main__':
    n = int(input())
    arr = list(map(int, input().split()))
    result = average(arr)
    print(result)
#////////////////////**************** Defaultdict Collections *********\\\\\\\\\\\\\\\\\\\\\\\\
from collections import defaultdict

N,M = map(int, input().split())
d=defaultdict(list)
for i in range(N):
    s= input().rstrip()
    d[s].append(i+1)
for _ in range(M):
    s=input().rstrip()
    if s in d:
        print(' '.join(map(str, d[s])))
    else:
        print('-1')
        
 #//////////////////**************** Python Calendar ***************\\\\\\\\\\\\\\\\\
import calendar

#print(calendar.TextCalendar(firstweekday=6).formatyear(2021))
weekdays = ['MONDAY','TUESDAY','WEDNESDAY','THURSDAY','FRIDAY','SATURDAY','SUNDAY']
m,d,y= map(int, input().split(" "))

w = calendar.weekday(y,m,d)
print(weekdays[w])

#//////////////////// ***************** datetime by seconds ******************* \\\\\\\\\\\\\\\\\\\\\\\\
from  datetime import datetime

def time_delta(t1, t2):
    time_format = "%a %d %b %Y %H:%M:%S %z"
    time1 = datetime.strptime(t1, time_format)
    time2 = datetime.strptime(t2, time_format)
    return int(abs(time1 - time2).total_seconds())
for i in range(int(input())):
    t1 = input()
    t2 = input()
    print(time_delta(t1, t2))
#//////////////////// ************* ****************************\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
for i in range(int(input())):
    try:
        a, b = map(int, input().split(" "))
        print(a//b)
    except Exception as e:
        print("Error Code:",e)
# /////////////////// ************* Collections namedtuple **************** \\\\\\\\\\\\\\\\\\\
from collections import namedtuple
n = int(input())
data = namedtuple("data", input().split())
s=0
for i in range(n):
 s += int(data(*input().split()).MARKS)
print(s/n)

#////////////////////// *************** Math Degrees ************ \\\\\\\\\\\\\\\\\\\\\

import math
AB = float(input())
BC = float(input())
print(str(int(round(math.degrees(math.atan2(AB,BC)))))+"°")

#///////////////************** No Idea! ******************* \\\\\\\\\\\\\\\\\\\
n, m = map(int, input().split())
arr = list(map(int, input().split()))
A=set(map(int, input().split()))
B=set(map(int, input().split()))
print(sum((i in A) - (i in B) for i in arr))

#//////////// *********** Set.add() ********************\\\\\\\\\\\\\\\\
n = int(input())
set1 = set()
for i in range(n):
    set1.add(input())
print(len(set1))
