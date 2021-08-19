n = int(input("Panjang gerbong : "))
i = 0
arr = []

while i < n :
    s = input()
    arr.append(s)
    i += 1
 
print("Nomor gerbong : " + " " .join(arr))

print("Nomor gerbong setelah dibalik : " + ", " .join(reversed(arr)))
