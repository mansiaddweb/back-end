x = [10, 20, 30, 40, 10]
y = [75, 65, 35, 75, 30]
def check(arg):
    if(arg[0]==arg[len(arg)-1]):
        return True
    else:
        return False

print(check(x))
print(check(y))