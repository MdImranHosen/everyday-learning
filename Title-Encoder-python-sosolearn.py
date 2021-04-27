file = open("/usercode/files/books.txt", "r")

#your code goes here
count = file.readlines()
for l in count:
  imran = ''
  for i in list(l.split()):
    imran += i[0]
  print(imran)

file.close()
