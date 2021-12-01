list1 = ["M", "na", "i", "ma"]
list2 = ["y", "me", "s", "nsi"]
list3 =[]
for i in range(len(list1)):
    for p in range(len(list2)):
        if(i==p):

            list3.insert(len(list3),(list1[i]+list2[p]))

print(list3)
