d = 0
hasil = 0
d = 0
while d == 0 :
  n = int(input())
  if(9<n<1001):
    hasil = int((n/2)+(n/3)+(n/4))
    d = 1
  else :
    d = 0


print(hasil)