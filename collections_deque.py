from collections import deque
t = int(input())

while t>0:
    n=int(input())
    l=list(map(int, input().split()))
    lst=deque(l)
    rm=lst.pop()
    lm=lst.popleft()
    csv= lm if lm>rm else rm
    lp=-1
    flag=False
    while(len(lst)>0):
        if(lm>rm and lm<=csv):
            csv=lm
            lm=lst.popleft()
            latest=lm
        elif(rm>lm and rm<=csv):
            csv =rm
            rm=lst.pop()
            latest=rm
        else:
            flag= True
            break
    if flag or latest > csv:
        print("No")
    else:
        print("Yes")
    t-=1
