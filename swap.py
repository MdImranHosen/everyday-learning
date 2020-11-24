def change(c):
    if str.islower(c):
        return str.upper(c)
    else:
        return str.lower(c)
def swap_case(s):
    return  ''.join(map(change, s))
if __name__ == '__main__':
    s = input()
    result = swap_case(s)
    print(result)
