# Enter your code here. Read input from STDIN. Print output to STDOUT
n = int(input())
stock = list(map(int, input().split(' ')))

from collections import Counter
Dict = Counter(stock)
x = int(input())

p=0
for i in range(x):
    size,price = map(int, input().split(' '))
    if Dict[size]:
        Dict[size] -= 1
        p=p+price
print(p)
