str1 = "PyNaTive"
l1 =[]
l2 =[]
s=''
for l in str1:
    if(l.isupper()):
        l1.append(l)
    else:
        l2.append(l)
print(s.join(l2)+s.join(l1))
