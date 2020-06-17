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
    public partial class LogIn : Form
    {
        public LogIn()
        {
          
            InitializeComponent();
            Zbor zb = new Zbor();
            zb.updateZboruriDisponibile();
             
        }

/* |------------------------------------FUNCTII----------------------------------------------|*/

        //Functie de navigare de la formu curent la REGISTER form
        private void go2Reg()
        {
            this.Hide();
            Register reg = new Register();
            reg.FormClosed += (s, args) => this.Close();
            reg.Show();
            reg.Focus();
        }

        //Functie de navigare de la formu curent la AdaugaBielete form
        private void go2AdaugaBilete()
        {
            this.Hide();
            AdaugaBilete add = new AdaugaBilete(numeUtilizator.Text);
            add.FormClosed += (s, args) => this.Close();
            add.Show();
            add.Focus();
        }

        //Functie de navigare de la formu curent la RezervaBilete form
        private void go2RezervaBilete()
        {
            this.Hide();
            RezervaBilete add = new RezervaBilete(numeUtilizator.Text);
            add.FormClosed += (s, args) => this.Close();
            add.Show();
            add.Focus();
        }

        private void go2RezervaBilete(String cash)
        {
            this.Hide();
            RezervaBilete add = new RezervaBilete(numeUtilizator.Text,cash);
            add.FormClosed += (s, args) => this.Close();
            add.Show();
            add.Focus();
        }
        //Functie de logare
        private void log()
        {
            Users user = new Users(numeUtilizator.Text, parola.Text);
            switch (user.logIn())
            {
                case 1:
                    go2AdaugaBilete();
                    break;
                case 2:
                    go2RezervaBilete();
                    break;
                case 3:
                    go2RezervaBilete("Cash");
                    break;
            }
        }


/* |------------------------------------FUNCTII BUTOANE----------------------------------------------|*/

        //Buton de logIn
        private void logInBut(object sender, EventArgs e)
        {
            log();
        }

        //Buton de trimitere la inregistrare
        private void InregBTN_Click(object sender, EventArgs e)
        {
            go2Reg();
        }
    }
}
