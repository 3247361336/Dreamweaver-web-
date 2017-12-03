<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/jscript">
	function setTab(name, cursel) {
    for (var i = 1; i <= links_len; i++) {
        var menu = document.getElementById(name + i);
        var menudiv = document.getElementById("con_" + name + "_" + i);
        if (i == cursel) {
            menu.className = "off";
            menudiv.style.display = "block";
        }
        else {
            menu.className = "";
            menudiv.style.display = "none";
        }
        document.getElementById("hidfTagHistory").value = cursel;
    }
}
</script>
</head>

<body>
<div class="tab1" id="tab1">
                                <div class="menu">
                                    <ul>
                                        <li id="one1" onclick="setTab('one',1)">充值</li>
                                        <li id="one2" onclick="setTab('one',2)">作废售水</li>
                                        <li id="one3" onclick="setTab('one',3)">退水</li>
                                        <li id="one6" onclick="setTab('one',6)">换表</li>
                                    </ul>
                                </div>
                                <div class="menu" style="border-top: #cccccc solid 1px;">
                                    <ul>
                                        <li id="one4" onclick="setTab('one',4)">补卡</li>
                                        <li id="one5" onclick="setTab('one',5);clearCardExt();">清除卡</li>
                                        <li id="one7" onclick="setTab('one',7);readCardExt();">读卡</li>
                                    </ul>
                                </div>
                                <div class="menudiv">
                                    <div id="con_one_1">
                                        <table>
                                            <tr>
                                                <td>充值金额：</td>
                                                <td>
                                                    <input type="text" id="txtRechargeAmount" onblur="getMeterCount()" />
                                                    <%--<asp:TextBox ID="txtRechargeAmount" runat="server"></asp:TextBox>--%><span>元</span></td>
                                            </tr>
                                            <tr>
                                                <td>预存水量：</td>
                                                <td>
                                                    <input type="text" id="txtPrestoreWater" />
                                                    <%-- <asp:TextBox ID="txtPrestoreWater" runat="server"></asp:TextBox>--%><span>吨</span></td>
                                            </tr>
                                            <tr>
                                                <td>收取金额：</td>
                                                <td><span>元</span></td>
                                            </tr>
                                            <tr>
                                                <td>找零：</td>
                                                <td><span>元</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <asp:Button ID="btnNetRecharge" runat="server" Text="网络充值" CssClass="btn" /></td>
                                                <td>
                                                    <asp:Button ID="btnRecharge" runat="server" Text="射频卡充值" CssClass="btn" OnClientClick="writeCardExt();return false;" /></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div id="con_one_2" style="display: none;">作废售水</div>
                                    <div id="con_one_3" style="display: none;">退水</div>
                                    <div id="con_one_4" style="display: none;">补卡</div>
                                    <div id="con_one_5" style="display: none;">清除卡</div>
                                    <div id="con_one_6" style="display: none;">换表</div>
                                    <div id="con_one_7" style="display: none;">读卡</div>
                                </div>
                            </div>
</body>
</html>
