# s = int(input("Nilai pertama : "))
# n = int(input("Panjang deret : "))
# d = int(input("Selisih deret : "))

s, n, d = [int(x) for x in input().split()]

i = 0

print("----------")

while i < n :
    print (s)
    s += d
    i += 1