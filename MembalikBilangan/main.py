t = int(input())
n = [] 

def balik_angka(num):
  return int(str(num)[::-1])

while t > 0 :
  masukkan = input()
  n.append(masukkan)
  t -= 1

print('-----------------')

for isi in n :
  print (balik_angka(isi))
