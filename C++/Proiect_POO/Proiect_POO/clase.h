#include <iostream>
#include <string>

using namespace std;


class lista;

class Sporturi
{
private:
	string Nume_Echipa, Nume_Antrenor;
	int Numar_Persoane;
	Sporturi *urm;

public:
	Sporturi();
	Sporturi(string Nume_Ech, string Nume_Antr, int Numar_Pers);
	virtual void Afisare();
	friend class Lista;
};

class Volei: Sporturi
{
private:
	string Loc_de_intalnire,Categorie;

public:
	Volei():Sporturi(){}
	Volei(string Loc_de_intalnire, string Categorie):Sporturi(Nume_Ech,Nume_Antr,Numar_Pers){}
};




