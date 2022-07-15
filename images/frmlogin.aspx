<%@ Page Language="C#" AutoEventWireup="true" CodeFile="frmlogin.aspx.cs" Inherits="frmlogin" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title></title>
    <style type="text/css">
        html, body
        {
            height: 100%;
            margin: 0;
        }
        body
        {
            font: 12px/1.5 "Trebuchet MS";
        }
    </style>
</head>
<body>
    <form id="form1" runat="server" style="height: 100%">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
        <tr>
            <td style="background-image: url(imgs/bg.png); background-repeat: repeat-x; vertical-align: middle;
                text-align: center">
                <table cellpadding="0" cellspacing="0" border="0" align="center">
                    <tr>
                        <td style="background-image: url(imgs/login.png); background-repeat: no-repeat; vertical-align: middle;
                            text-align: center" width="444px" height="329px">
                            <table border="0" cellpadding="4" cellspacing="4" border="0" align="center">
                                <tr>
                                    <td colspan="3" style="font:15px Trebuchet MS; font-weight:bold; text-transform:uppercase">Admin Panel
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Username
                                    </td>
                                    <td>
                                        <asp:TextBox ID="txtUsername" runat="server" MaxLength="50"></asp:TextBox>
                                    </td>
                                    <td style="margin-left: 80px">
                                        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ControlToValidate="txtUsername"
                                            ErrorMessage="Please enter username" ValidationGroup="1">*</asp:RequiredFieldValidator>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Password
                                    </td>
                                    <td>
                                        <asp:TextBox ID="txtPassword" runat="server" MaxLength="50" TextMode="Password"></asp:TextBox>
                                    </td>
                                    <td style="margin-left: 80px">
                                        <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ControlToValidate="txtPassword"
                                            ErrorMessage="Please enter password" ValidationGroup="1">*</asp:RequiredFieldValidator>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        <asp:Button ID="btnlogin" runat="server" OnClick="btnlogin_Click" Text="Login" ValidationGroup="1" />
                                    </td>
                                    <td style="margin-left: 80px">
                                        <asp:ValidationSummary ID="ValidationSummary1" runat="server" ShowMessageBox="True"
                                            ShowSummary="False" ValidationGroup="1" />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
