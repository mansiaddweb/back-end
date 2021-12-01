list1 = [10, 20, 25, 30, 35]
list2 = [40, 45, 60, 75, 90]
list3 = []
for i in range(len(list1)):
    if(list1[i]%2==1):
        list3.insert(len(list3),list1[i])

for i in range(len(list2)):         
    if(list2[i]%2==0):
        list3.insert(len(list3),list2[i])


print (list3)