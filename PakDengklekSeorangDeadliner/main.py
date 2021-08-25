n = float(input())

jam = round(n // 3600)
print(jam)
sisa = n % 3600
hasil = round(n//60)
if hasil > 60 :
  menit = abs(hasil - 60)
  print(menit)
else :
  print(hasil)
detik = int(sisa % 60)
print(detik)
