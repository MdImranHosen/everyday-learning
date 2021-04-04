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

#/////////// **************** Collections.OrderedDict() ***************\\\\\\\\\\\\\\
from collections import OrderedDict

ordinary_dictionary = OrderedDict()
for i in range(int(input())):
    k,v = input().rsplit(' ',1)
    if k in ordinary_dictionary:
        ordinary_dictionary[k]=int(ordinary_dictionary[k])+int(v)
    else:
        ordinary_dictionary[k]=v
for k,v in ordinary_dictionary.items():
    print(k,v)
 
# //////////// //// ************ Word Order **********\\\\\\\\\\\\\\\

from collections import defaultdict
d = defaultdict(lambda: 0)
for i in range(int(input())):
    d[input()] += 1
print(len(d.items()))
print(*d.values())

# ////////////// ************** Collections.deque() ***************\\\\\\\\\\\\\\\
from collections import *
d=deque()
for i in range(int(input())):
    s= input().split()
    if s[0]=="append":
        d.append(s[1])
    elif s[0]=="pop":
        d.pop()
    elif s[0]=="appendleft":
        d.appendleft(s[1])
    else:
        d.popleft()
for i in d:
    print(i, end=" ")
# ////////////////// *********** Symmetric Difference ********************* \\\\\\\\\\\\\\\\\
n = int(input())
s1 = set(map(int, input().split()))
m = int(input())
s2 = set(map(int, input().split()))
s3 = s1.union(s2)

l = []
for i in s3:
    if i in s1 and i in s2:
        pass
    else:
        l.append(i)
l.sort()
for i in l:
    print(i)
 #/////////////////////////****************** Re compile ************************\\\\\\\\\\\\\\\\
import re
for i in range(int(input())):
    try:
       re.compile(input())
       print(True)
    except:
       print(False)
 #///////////////////// ********************** set discard ************************\\\\\\\\\\\\\\\\\\\\\\
n=int(input())
s=set(map(int, input().split()))
m=int(input())
for i in range(m):
    s1=list(input().split())
    if s1[0]== "pop":
        s.pop()
    elif s1[0]=="remove":
        s.remove(int(s1[1]))
    elif s1[0]=="discard":
        s.discard(int(s1[1]))

sum=0
for j in s:
    sum=sum+j
print(sum)

#////////

m = int(input())
s = set(map(int, input().split()))
n = int(input())
for i in range(n):
    commands = input().split()
    if len(commands) > 1:
        e = int(commands[1])
    if commands[0] == "pop":
        s.pop()
    if commands[0] == "remove":
        s.remove(e)
    if commands[0] == "discard":
        s.discard(e)
print(sum(s))

#//////////////////////////// ********************* Company Logo py Hk **************\\\\\\\\\\\\\\\\
import collections
if __name__ == '__main__':
    s = sorted(input().strip())
    count = collections.Counter(s).most_common()
    count = sorted(count, key=lambda x: (-1 * x[1], x[0]))

    for x in range(3):
        print(count[x][0], count[x][1])
        
  #////////////////////////// ************************** Set Union Operation ***************************\\\\\\\\\\\\\\\\\\\\
n = int(input())
nl = set(map(int, input().split()))
m = int(input())
ml = set(map(int, input().split()))
tl = nl.union(ml)
co = 0
for i in tl:
    co = co+1
print(co)

#/////////////////////// ********************** Set .intersection() operation *********************\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
n = int(input())
nl = set(map(int, input().split()))
m = int(input())
ml = set(map(int, input().split()))
ans = nl.intersection(ml)
count = 0
for i in ans:
    count = count+1
print(count)

#//////////////////////***************************** set difference ***********************\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
n = int(input())
nl = set(map(int, input().split()))
m = int(input())
ml = set(map(int, input().split()))
ans = nl.difference(ml)
count = 0
for i in ans:
    count = count+1
print(count)
#//////////////////////// *********************** set symmetric_difference  ****************************\\\\\\\\\\\\\\\\\\\\\\\\\
n = int(input())
nl = set(map(int, input().split()))
m = int(input())
ml = set(map(int, input().split()))
ans = nl.symmetric_difference(ml)
count = 0
for i in ans:
    count = count+1
print(count)

#///////////////////// *********************** Piling Up *********************************\\\\\\\\\\\\\\\\\\\\\\\
for t in range(int(input())):
    l = int(input())
    sides = list(map(int, input().split()))
    i = 0
    while i < l - 1 and sides[i] >= sides[i + 1]:
        i += 1
    while i < l - 1 and sides[i] <= sides[i + 1]:
        i += 1
    print('Yes' if i == l - 1 else 'No')
    
 #/////////////// ********************* Triangle Quest 2 *************************\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
n = int(input())

for i in range(1,n+1):

    print((10**i//9)**2)
    
#///////////////// ********************* Mod divmod ************************\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
n = int(input())
m = int(input())

p = divmod(n, m)
i = list(p)
print(i[0])
print(i[1])
print(p)
#//////////////// ********************** Power ModPower *************************\\\\\\\\\\\\\\\\\\\\
a = int(input())
b = int(input())
m = int(input())

print(pow(a,b))
print(pow(a,b,m))
# ////////////////////////***************** Integers Come In All Sizes ***************************\\\\\\\\\\\\\\\\\\\\\\\\\\\\
a = int(input())
b = int(input())
m = int(input())
n = int(input())

print((a**b)+(m**n))

#//////////////////////// ********************* triangle-quest ************************************\\\\\\\\\\\\\\\\\\\\\\\\\\\\
for i in range(1,int(input())):
   print(int(((10 ** i - 1) / 9) * i))
#/////////////////////////// ************************ iterables-and-iterators ******************************\\\\\\\\\\\\\\\\\\\\\\
from itertools import combinations

n = int(input())
arr = input().split()
m = int(input())

c_list = list(combinations(arr, m))

a_list = [i for i in c_list if 'a' in i]
print(len(a_list) / len(c_list))

#/////////////////// ********************************* Maximize It  ******************************* \\\\\\\\\\\\\\\\\\
from itertools import product

k, m = map(int, input().split())

array = []
for _ in range(k):
    array.append(list(map(int, input().split()))[1:])

result = 0
for combination in product(*array):
    result = max(sum([x * x for x in combination]) % m, result)
print(result)
