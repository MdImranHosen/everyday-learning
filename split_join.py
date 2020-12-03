def split_and_join(imran):
    return  '-'.join(imran.split())

if __name__ == '__main__':
    imran = input()
    result = split_and_join(imran)
    print(result)
    
#///////////////////////////////////////

def name_me(a, b):
    return ("Hello "+a+" "+b+"! You just delved into python.")

if __name__ == '__main__':
    a = input()
    b = input()
    result = name_me(a,b)
    print(result)
    
    #//////////////////////////Mutations String Python/////////////////
    
def imranHosen(st, p, c):
    return  st[:p]+c+st[p+1:]
if __name__ == '__main__':
    imran = input()
    i, m = input().split()
    result =  imranHosen(imran, int(i), m)
    print(result)
    
    #//// Find a String /////////////////////////
    
    def imran_string_count(s, sb):
    sl = len(s)
    sbl = len(sb)
    c = 0
    for i in range(sl-sbl+1):
        if(s[i:(i+sbl)] == sub_string):
            c = c+1
    return c
if __name__ == '__main__':
    string = input().strip()
    sub_string = input().strip()

    count = imran_string_count(string, sub_string)
    print(count)
