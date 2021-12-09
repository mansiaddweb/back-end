s1 = "Abc"
s2 = "Xyz"
a=0
p=[]
s=''
while(a<len(s1)):
    p.append(s1[a]+s2[(len(s1)-1)-a])
    a=a+1
sw=s.join(p)
print(sw)