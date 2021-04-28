f = input()
s = input()
l = len(f)
c = 0
for i in f:
    if i == s:
        c += 1
im = (c / l) * 100
print(int(im))
