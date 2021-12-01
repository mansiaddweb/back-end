list1 = [10, 20, 30, 40]
list2 = [100, 200, 300, 400]
a=0
# m=list2.reverse()
while(a<len(list1)):
    print(str(list1[a])+" "+str(list2[(len(list1)-1)-a]))
    a=a+1
# print(list)
