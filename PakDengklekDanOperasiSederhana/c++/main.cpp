#include<iostream>
using namespace std;

int main(){
    int x,y;
    cin>>x>>y;

if(x == 0 && y ==0){
    cout<<"tidak boleh memasukkan angka 0!!! ";
}else{

    int tambah = x + y;
    cout<<tambah<<"\n";

    int kurang = x - y;
    cout<<kurang<<"\n";

    int kali = x * y;
    cout<<kali<<"\n";

    int bagi = x / y;
    cout<<bagi<<"\n";

    int mod = x % y;
    cout<<mod<<"\n";
}

}