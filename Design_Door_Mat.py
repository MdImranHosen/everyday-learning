if __name__ == '__main__':

 R,C = map(int, input().split())

 for i in range(1,R,2):
     print(("_|_"*i).center(C,"-"))
 print(("welcome").center(C, "-"))

 for i in range(R-2,-1,-2):
     print(("_|_"*i).center(C,"-"))

 for j in range(2,10,3): # 2 is Start Point, 10 Range and 3 pre increment
     print(j)
