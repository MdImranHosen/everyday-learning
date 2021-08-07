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

#//////////////////// ********************* set mutations ********************************* \\\\\\\\\\\\\\\\\\\\\\\
if __name__ == '__main__':
    (_, A) = (int(input()),set(map(int, input().split())))
    B = int(input())
    for _ in range(B):
        (command, newSet) = (input().split()[0],set(map(int, input().split())))
        getattr(A, command)(newSet)

    print(sum(A))
 #////////////////////// *********************** The Captain's Romm ************************\\\\\\\\\\\\\\\\\\\\\\
h = int(input())
s = set()
e = 0
for j in input().split():
    l = int(j)
    s.add(l)
    e += l

print(s)
print((sum(s)))
print(e)
print((sum(s)*h))
print((sum(s)*h - e))
print((sum(s)*h - e)//(h-1))

#////////////////////////// ******************** Check Subset *******************\\\\\\\\\\\\\\\\\\\
T = int(input())

for _ in range(T):
    a = input()
    A = set(input().split())
    b = int(input())
    B = set(input().split())
    print(A.issubset(B))
    
#//////////////////////// ************************* Check Strict Superset  ******************************\\\\\\\\\\\\\\\\\\\\\\\\
a = set(input().split())
print(all(a > set(input().split()) for _ in range(int(input()))))
#///////////////////// ************************* String Concate ******************************\\\\\\\\\\\\\\\\\\\\\\\
def concatenate(*n):
    key = ''
    j = 0
    for i in n:
        j += 1
        if j != 1:
          key += '_'+i
        else:
          key += i
    return key
print(concatenate("I","Love","Pyton","!"))

#//////////////////////////// **************** Phone Number Valid / Invalid ************\\\\\\\\\\\\\\\\\\
import re
n = int(input())
stri = str(n)
l = len(stri)
ls = list(stri)
if l == 8:
    if int(ls[0]) == 1:
        print("Valid")
    elif int(ls[0]) == 8:
        print("Valid")
    elif int(ls[0]) == 9:
        print("Valid")
    else:
        print("Invalid")
else:
  print("Invalid")
  
  #///////////////////////// ******************************** Celsius to Faheheirent **************************\\\\\\\\\\\\\\\\\\\\
  def celsiusToFahenheit(n):
    d = n*(9/5)+32
    return d

n = float(input())
res = celsiusToFahenheit(n)
print(res)
#//////////////////////////////// ***************************** Readlines ******************************\\\\\\\\\\\\\\\\\\\\\\\\
file  = open("imran.txt", "r")
l = file.readlines()

for i in l:
    f = i[0]
    a = len(i.strip())
    d = f + str(a)
    print(d)
file.close()

#/////////////////////////////// ************************************ Find the Torsional Angle  ****************************** \\\\\\\\\\\\\\\\\\\\\\\\\\\\\
import math

class Points(object):
    def __init__(self, x, y, z):
        self.x = x
        self.y = y
        self.z = z

    def __sub__(self, no):
        x = self.x - no.x
        y = self.y - no.y
        z = self.z - no.z
        return Points(x, y, z)

    def dot(self, no):
        x = self.x * no.x
        y = self.y * no.y
        z = self.z * no.z
        return  x + y + z

    def cross(self, no):
        x = self.y * no.z - self.z * no.y
        y = self.z * no.x - self.x * no.z
        z = self.x * no.y - self.y * no.x
        return Points(x, y, z)

    def absolute(self):
        return  pow((self.x ** 2 + self.y ** 2 + self.z ** 2), 0.5)

if __name__ == '__main__':
    points = list()
    for i in range(4):
        a = list(map(float, input().split()))
        points.append(a)

    a, b, c, d = Points(*points[0]), Points(*points[1]), Points(*points[2]), Points(*points[3])

    x = (b - a).cross(c - b)
    y = (c - b).cross( d - c)
    angle = math.acos(x.dot(y) / (x.absolute() * y.absolute()))
    print("%.2f" % math.degrees(angle))
#////////////************ Letters  character count ****** \\\\\\\\\
text = input()
dict = {}
for char in text:
    if char in dict:
       dict[char] += 1 
     
    else: 
       dict[char] = 1
       
print(dict)
#////////////// ****************** zipped zip function use to python ************************\\\\\\\\\\\\\\\\\\\\\\\\\\
n, x = map(int, input().split())

mxs = []
for _ in range(x):
    mxs.append(map(float, input().split()))

for i in zip(*mxs):
    print(sum(i))
    print(len(i))
    print(sum(i)/len(i))
#//////////////// ****************** Python Evaluation HackerRank ************************** \\\\\\\\\\\\\\\\\\\\\
e = input()
eval(e)

#/////////// ************************** Python Any or All ********************* \\\\\\\\\\\\\\\\\\\
if __name__ == "__main__":
    num_cnt = int(input().strip())
    arr = list(input().strip().split())
    print(all([all([int(x) > 0 for x in arr ]), any([x == x[::-1] for x in arr])]))
    
 #/////////// ************************ Python ginortS ******************** \\\\\\\\\\\\\\\\\
if __name__ == "__main__":
    string = input().strip()

    print(*sorted(string, key=lambda  x: (-x.islower(), - x.isupper(), -x.isdigit(), x in '02468', x)), sep='')
# //////////////// ************** Python Detect floating point number \\\\\\\\\\\\\\\\\\
from re import match, compile
pattern = compile('^[-+]?[0-9]*\.[0-9]+$')

for _ in range(int(input())):
    print(bool(pattern.match(input())))
   
  # //////////////////************************* Python  Re.split  Hackerrank ******************** \\\\\\\\\\\\\\\\\\\\\
regex_pattern = r"[,.]+"	# Do not delete 'r'.

import re
print("\n".join(re.split(regex_pattern, input())))
# \\\\\\\\\\\\\\\\\\\ ************************** Python Map and Lambda Function ****************** ///////////////////////////
cube = lambda x: pow(x,3)

def fibonacci(n):
    imran = [0,1]
    for i in range(2,n):
        imran.append(imran[i-2] + imran[i-1])
    return imran[0:n]
if __name__ == '__main__':
    n = int(input())
    print(list(map(cube, fibonacci(n))))
 # \\\\\\\\\\\\\\\\\\\\\\\\ *****************Python Email Address Validation ************************//////////////////////
import re
def fun(s):
    emailed = []
    if bool(re.match(r'^([a-z0-9_\-]+)@([a-z0-9]+)\.([a-z]{1,3})$',s)):
        emailed.append(s)
    elif s== '':
        return []

    return sorted(emailed)

def filter_mail(emails):
    return list(filter(fun, emails))

if __name__ == '__main__':
    n = int(input())
    emails = []
    for _ in range(n):
        emails.append(input())
filtered_emails = filter_mail(emails)
filtered_emails.sort()
print(filtered_emails)
#\\\\\\\\\\\\\\\\\\*************************** Python Group(), Groups(), Groupdit() Hackerrank *********************////////////////////////
import re
m = re.search(r'([a-zA-Z0-9])\1', input().strip())
print(m.group(1) if m else -1)
#\\\\\\\\\\\\\\\\\\ *********************** PyThon Findall(), Finditer() Hackerrank ********************///////////////
import re
vowels = 'aeiou'
consonants = 'qwrtypsdfghjklzxcvbnm'
match = re.findall(r'(?<=[' + consonants + '])([' + vowels + ']{2,})(?=[' + consonants + '])', input(), flags=re.I)
print('\n'.join(match or ['-1']))
