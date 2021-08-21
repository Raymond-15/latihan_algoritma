a, b, c, k = [int(x) for x in input().split()]
n = []
n.append(a)
n.append(b)
n.append(c)

if k < 1 :
    n.sort()
    n.reverse()
    print(*n)
else :
    n.sort()
    print(*n)