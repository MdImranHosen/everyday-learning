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
