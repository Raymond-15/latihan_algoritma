import re

n = input()

khusus = '~ 1 ! @ 2 # 3 $ 4 % 5 ^ 6 & 7 * 8 ( 9 ) 0 _ - + ='

kapital = len(re.findall(r'[A-Z]',n))

t = list(n)
hitung = 0

for x in range(len(t)):
    cek = t[x]
    if cek in khusus :
      hitung += 1

if hitung > 0 :
  khusus = 1
else :
  khusus = 0

if len(n) > 12 :
  panjang = 1
else :
  panjang = 0

hasil = khusus + panjang

if hasil > 1 and khusus == 1 :
  print('Kuat')
elif hasil == 0 and khusus == 1:
  print('Kuat')
elif hasil == 1 and khusus == 0:
  print('AgakKuat')
elif hasil == 0 and khusus == 0 :
  print('Lemah')