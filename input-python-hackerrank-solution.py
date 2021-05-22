xk = list(map(int, input().split()))
x = xk[0]
k = xk[1]
p = input()
if eval(p) == k:
    print(True)
else:
    print(False)
