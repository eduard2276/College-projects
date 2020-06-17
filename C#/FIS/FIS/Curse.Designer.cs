namespace FIS
{
    partial class Curse
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.listaPlecari = new System.Windows.Forms.ListBox();
            this.listaIntoarceri = new System.Windows.Forms.ListBox();
            this.label1 = new System.Windows.Forms.Label();
            this.infoSuplimentare = new System.Windows.Forms.Label();
            this.intoarceriText = new System.Windows.Forms.Label();
            this.Rezerva = new System.Windows.Forms.Button();
            this.infoSupl = new System.Windows.Forms.Label();
            this.dePlataText = new System.Windows.Forms.Label();
            this.total = new System.Windows.Forms.Label();
            this.button1 = new System.Windows.Forms.Button();
            this.backBtn = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // listaPlecari
            // 
            this.listaPlecari.FormattingEnabled = true;
            this.listaPlecari.ItemHeight = 16;
            this.listaPlecari.Location = new System.Drawing.Point(12, 51);
            this.listaPlecari.Name = "listaPlecari";
            this.listaPlecari.Size = new System.Drawing.Size(816, 116);
            this.listaPlecari.TabIndex = 0;
            this.listaPlecari.Click += new System.EventHandler(this.listaPlecari_Click);
            this.listaPlecari.SelectedIndexChanged += new System.EventHandler(this.listaPlecari_SelectedIndexChanged);
            this.listaPlecari.DoubleClick += new System.EventHandler(this.listaPlecari_DoubleClick);
            // 
            // listaIntoarceri
            // 
            this.listaIntoarceri.FormattingEnabled = true;
            this.listaIntoarceri.ItemHeight = 16;
            this.listaIntoarceri.Location = new System.Drawing.Point(19, 286);
            this.listaIntoarceri.Name = "listaIntoarceri";
            this.listaIntoarceri.Size = new System.Drawing.Size(809, 116);
            this.listaIntoarceri.TabIndex = 1;
            this.listaIntoarceri.Click += new System.EventHandler(this.listaIntoarceri_Click);
            this.listaIntoarceri.SelectedIndexChanged += new System.EventHandler(this.listaIntoarceri_SelectedIndexChanged);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 20F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(354, 9);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(122, 39);
            this.label1.TabIndex = 2;
            this.label1.Text = "Plecari";
            // 
            // infoSuplimentare
            // 
            this.infoSuplimentare.AutoSize = true;
            this.infoSuplimentare.Location = new System.Drawing.Point(16, 168);
            this.infoSuplimentare.Name = "infoSuplimentare";
            this.infoSuplimentare.Size = new System.Drawing.Size(154, 17);
            this.infoSuplimentare.TabIndex = 3;
            this.infoSuplimentare.Text = "Informatii suplimentare:";
            // 
            // intoarceriText
            // 
            this.intoarceriText.AutoSize = true;
            this.intoarceriText.Font = new System.Drawing.Font("Microsoft Sans Serif", 20F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.intoarceriText.Location = new System.Drawing.Point(331, 244);
            this.intoarceriText.Name = "intoarceriText";
            this.intoarceriText.Size = new System.Drawing.Size(159, 39);
            this.intoarceriText.TabIndex = 4;
            this.intoarceriText.Text = "Intoarceri";
            // 
            // Rezerva
            // 
            this.Rezerva.Location = new System.Drawing.Point(331, 501);
            this.Rezerva.Name = "Rezerva";
            this.Rezerva.Size = new System.Drawing.Size(159, 47);
            this.Rezerva.TabIndex = 5;
            this.Rezerva.Text = "Rezerva";
            this.Rezerva.UseVisualStyleBackColor = true;
            this.Rezerva.Click += new System.EventHandler(this.Rezerva_Click);
            // 
            // infoSupl
            // 
            this.infoSupl.AutoSize = true;
            this.infoSupl.Location = new System.Drawing.Point(17, 405);
            this.infoSupl.Name = "infoSupl";
            this.infoSupl.Size = new System.Drawing.Size(154, 17);
            this.infoSupl.TabIndex = 6;
            this.infoSupl.Text = "Informatii suplimentare:";
            // 
            // dePlataText
            // 
            this.dePlataText.AutoSize = true;
            this.dePlataText.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.dePlataText.Location = new System.Drawing.Point(24, 501);
            this.dePlataText.Name = "dePlataText";
            this.dePlataText.Size = new System.Drawing.Size(79, 20);
            this.dePlataText.TabIndex = 7;
            this.dePlataText.Text = "De Plata:";
            // 
            // total
            // 
            this.total.AutoSize = true;
            this.total.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.total.Location = new System.Drawing.Point(109, 501);
            this.total.Name = "total";
            this.total.Size = new System.Drawing.Size(0, 20);
            this.total.TabIndex = 8;
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(12, 449);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(122, 33);
            this.button1.TabIndex = 9;
            this.button1.Text = "Calculeaza pret";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.calculeazaPret);
            // 
            // backBtn
            // 
            this.backBtn.Location = new System.Drawing.Point(12, 9);
            this.backBtn.Name = "backBtn";
            this.backBtn.Size = new System.Drawing.Size(105, 36);
            this.backBtn.TabIndex = 20;
            this.backBtn.Text = "<<";
            this.backBtn.UseVisualStyleBackColor = true;
            this.backBtn.Click += new System.EventHandler(this.backBtn_Click);
            // 
            // Curse
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(927, 560);
            this.Controls.Add(this.backBtn);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.total);
            this.Controls.Add(this.dePlataText);
            this.Controls.Add(this.infoSupl);
            this.Controls.Add(this.Rezerva);
            this.Controls.Add(this.intoarceriText);
            this.Controls.Add(this.infoSuplimentare);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.listaIntoarceri);
            this.Controls.Add(this.listaPlecari);
            this.Name = "Curse";
            this.Text = "Home";
            this.Load += new System.EventHandler(this.Curse_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.ListBox listaPlecari;
        private System.Windows.Forms.ListBox listaIntoarceri;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label infoSuplimentare;
        private System.Windows.Forms.Label intoarceriText;
        private System.Windows.Forms.Button Rezerva;
        private System.Windows.Forms.Label infoSupl;
        private System.Windows.Forms.Label dePlataText;
        private System.Windows.Forms.Label total;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Button backBtn;

    }
}