list1 = ["Hello ", "take "]
list2 = ["Dear", "Sir"]
list3 =[]
for i in range(len(list1)):
    for p in range(len(list2)):
        list3.insert(len(list3),(list1[i]+list2[p]))

print(list3)
