#include<iostream>
#include<iomanip>
using namespace std;
class Account
{
	char Name[30],Address[30],AccountType[10];
	char AccountNo[13],IFSC_code[13];
	
	
	public:

	virtual void input()
	{
		cout<<"Enter account holder name :";cin>>Name;
		cout<<"Enter address of holder   :";cin>>Address;
		cout<<"Enter account type        :";cin>>AccountType;
		cout<<"Enter account number      :";cin>>AccountNo;
		cout<<"Enter IFSC number         :";cin>>IFSC_code;
	} 
	virtual void display()
	{
		cout<<"Name            :"<<Name<<endl;
		cout<<"Address         :"<<Address<<endl;
		cout<<"Account type    :"<<AccountType<<endl;
		cout<<"Account number  :"<<AccountNo<<endl;
		cout<<"IFSC Code       :"<<IFSC_code<<endl;
	}
	virtual void interest()
	{
		float si;
		float product,rate,time;
		si=(product*rate*time)/100;
	}
};
class fixedAccount:public  Account
{
	float si;
	float product,rate,time;
	public :
	void input()
	{
		cout<<"------------------------------------------------------------"<<endl;
		Account::input();
		cout<<"Enter deposite amount       :";cin>>product;
		cout<<"Enter rate                  :";cin>>rate;
		cout<<"Enter time                  :";cin>>time;
	} 
	void display()
	{
		cout<<"------------------------------------------------------------"<<endl;
		Account::display();
		cout<<"Simple Interest :"<<si<<endl;
	}
	void interest()
	{
		cout<<"------------------------------------------------------------"<<endl;
		si=(product*rate*time)/100;
	}	
};
class savingAccount:public  Account
{
	float product,rate,time,si;
	public :
	void input()
	{
		cout<<"------------------------------------------------------------"<<endl;
		Account::input();
		cout<<"Enter deposite amount     :";cin>>product;
		cout<<"Enter rate                :";cin>>rate;
		cout<<"Enter time                :";cin>>time;
	} 
	void display()
	{
		cout<<"------------------------------------------------------------"<<endl;
		Account::display();
		cout<<"Simple Interest :"<<si<<endl;
	}
	void interest()
	{
		cout<<"------------------------------------------------------------"<<endl;
		float si;
		si=(product*rate*time)/100;
	}
};
int main()
{
	int ch;
	char choice;
		cout<<"------------------------------------------------------------"<<endl;
		cout<<setw(40)<<"LIBRARY MANAGEMENT SYSTEM"<<endl;
	do{
		cout<<"------------------------------------------------------------"<<endl;
		cout<<"1. Fixed account holder"<<"\n2. Saving account holder"<<"\n3. Exits"<<endl;
		cout<<"------------------------------------------------------------"<<endl;			cout<<"Enter the case :";cin>>ch;
		Account *ptr;
		switch	(ch)
		{
			case 1:
				cout<<setw(40)<<"Fixed Account Details"<<endl;
				ptr=new fixedAccount;
				ptr->input();
					ptr->interest();
					ptr->display();
				break;
				
			case 2:
				cout<<setw(40)<<"Saving Account Details"<<endl;
				ptr=new savingAccount;
				ptr->input();
					ptr->interest();
					ptr->display();
				break;
			case 3:
				exit(1);
		}
		cout<<"------------------------------------------------------------"<<endl;
		cout<<"Do you want more press (y|Y) :";cin>>choice;
	}while(choice=='y'||choice=='Y');
}

