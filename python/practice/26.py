str1 = "Emma25 is Data scientist50 and AI Expert"
a=''
s=str1.split(" ")
# p=a.join(s)
for i in s:
    if(not(i.isalpha())):
        print(i)