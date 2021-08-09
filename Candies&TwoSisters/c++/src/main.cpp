// #include <iostream>
// using namespace std;
// int main(){
//     int t;
//     cin>>t;
//     for (int i = 0; i < t; ++i) {
//         long long int x;
//         cin>>x;
//         if(x<=2){
//             cout<<"0\n";
//         }else{
//             if (x%2==0){
//                 cout<<x/2-1<<"\n";
//             }else{
//                 cout<<x/2<<"\n";
//             }
//         }
//     }
// }

#include<bits/stdc++.h>

using namespace std;

int main(){
    int t;
    cin>>t;
    while(--t){
        int n;
        cin>>n;
        if(n==1 || n==2){
            cout<<0<<"\n";
        }else if(n%2==0){
            cout<<n/2-1<<"\n";
        }else{
            cout<<n/2<<"\n";
        }
    }
    return 0;
}