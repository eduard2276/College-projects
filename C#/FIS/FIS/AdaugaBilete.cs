using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data.SqlClient;
namespace FIS
{
    public partial class AdaugaBilete : Form
    {
        //Declarare variabila privata
        private String companie;

        //Constructori
        public AdaugaBilete()
        {
            InitializeComponent();
        }
        public AdaugaBilete(String Companie)
        {
            InitializeComponent();
            this.companie = Companie;
        }


/* |------------------------------------FUNCTII----------------------------------------------|*/

        //Stergere date despre zbor
        private void clc()
        {
            cod.Text = "";
            tipAvion.Text = "";
            nrLocuriBus.Text = "";
            pretBus.Text = "";
            nrLocEc.Text = "";
            pretEc.Text = "";
            Plecare.Text = "";
            oraPlecare.Text = "";
            sosire.Text = "";
            oraSosire.Text = "";
        }

        private void exceptii()
        {
            //TO DO: niste exceptii in cazu aduagarilor
        }

        //Go 2 Log in form(back)
        private void goBack()
        {
            this.Hide();
            LogIn log = new LogIn();
            log.FormClosed += (s, args) => this.Close();
            log.Show();
            log.Focus();
        }

        //Functie de adaugare zbor
        private void adaugaZbor()
        {
            Zbor nouZbor = new Zbor(this.companie, cod.Text, tipAvion.Text, int.Parse(nrLocuriBus.Text), float.Parse(pretBus.Text), int.Parse(nrLocEc.Text), float.Parse(pretEc.Text), Plecare.Text, dataPlecare.Text, oraPlecare.Text, sosire.Text, dataSosire.Text, oraSosire.Text);
            nouZbor.add();
            clc();
        }


/* |------------------------------------FUNCTII BUTOANE----------------------------------------------|*/

        //Go back button
        private void backBtn_Click(object sender, EventArgs e)
        {
            goBack();
        }

        //Butonul de adaugare date
        private void adaugaZborBtn_Click(object sender, EventArgs e)
        {
            adaugaZbor();
        }



/* |------------------------------------FUNCTII INUTILE----------------------------------------------|*/


        private void AdaugaBilete_Load(object sender, EventArgs e)
        {

        }
        
    }
}
