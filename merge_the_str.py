def merge_the_string(string, k):
    c=0
    s=''
    for i in string:
        if i not in s:
            s= s+i
        c+=1
        if(c==k):
            print(s)
            c=0
            s=''


if __name__ == '__main__':
    string, k = input(), int(input())
    merge_the_string(string, k)
