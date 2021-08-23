s = [10, 40, 90]
m = [14, 60, 120]
l = [18, 80, 180]
x = [25, 100, 220]

ba, pa, li = [int(x) for x in input().split()]



if ba == s[0] and pa == s[1] and li == s[2] :
    print('S')
elif ba == m[0] and pa == m[1] and li == m[2] :
    print('M')
elif ba == l[0] and pa == l[1] and li == l[2] :
    print('L')
elif ba == x[0] and pa == x[1] and li == x[2] :
    print('X')
elif (ba > s[0] or pa > s[1] or li > s[2]) and (ba < m[0] or pa < m[1] or li < m[2]):
    print('M')
elif (ba > m[0] or pa > m[1] or li > m[2]) and (ba < l[0] or pa < l[1] or li < l[2]) :  
    print('L')
elif ba > l[0] or pa > l[1] or li > l[2] :
    print('X')
elif ba < m[0] and pa < m[1] and li < m[2] :
    print('S')