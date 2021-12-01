str1="james"
for i in range(len(str1)):
    if(i==0):
        print(str1[i])
    if(i==(len(str1)-1)):
        print(str1[i])
    if(i==int(len(str1)/2)):
        print(str1[i])