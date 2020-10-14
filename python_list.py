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


