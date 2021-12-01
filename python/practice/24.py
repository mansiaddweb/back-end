s="Apple"
a={}
for i in s:
    a[i]=s.count(i,0,len(s))

print(a)