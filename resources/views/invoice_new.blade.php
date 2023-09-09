<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Mandni international invoice</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
      <style type="text/css">
         body{margin-top:20px;
         background:#eee;
         }
         .invoice {
         padding: 15px;
         }
         .invoice h2 {
         margin-top: 0px;
         line-height: 0.8em;
         }
         .invoice .small {
         font-weight: 300;
         }
         .invoice hr {
         margin-top: 7px;
         margin-bottom:10px;
         border-color: #ddd;
         }
         .invoice .table {
         font-size:12px;
         }
         .invoice .table td {
         border: none;
         }
         .invoice .identity {
         margin-top: 10px;
         font-size: 1.1em;
         font-weight: 300;
         }
         .invoice .identity strong {
         font-weight: 600;
         }
         .grid {
         position: relative;
         width: 100%;
         background: #fff;
         color: #666666;
         border-radius: 2px;
         margin-bottom: 25px;
         box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
         }
         .product-line {
         border: 1px solid #ddd;  
         padding:5px; 
         }
         .invoice .table tr.line td {
           padding:3px; 
         }
         .invoice .table tr.line :last-child {
             text-align:right;
         }
         .tax-invoice {
            margin-top:10px;
            margin-bottom:5px;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="grid invoice">
                  <div class="grid-body">
                     <div class="invoice-title">
                        <div class="row">
                           <div class="col-md-12">
                              <img width="100%" height="90"
                                        src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCABVAp0DASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD9MtC0HTTomnk6fakm3j5MC/3R7Vf/ALA0z/oHWn/fhf8ACjQv+QHp/wD17x/+gir1AFH+wdL/AOgdaf8Aflf8KP7A0z/oHWn/AH4X/Cr1HGKAKP8AYOmf9A60/wC/C/4Uf2Dpf/QOtP8Avwv+FO1bVbPRdPnvL66isrSFS8lxO4REX1JPAFfLvxJ/bp0nSJprPwfpp1uZDtN/ds0Vvn1VfvMPrt/GuetiKWHV6jse1lmS4/OKns8FScrbvZL1b0X5n1B/YOl/9A60/wC/C/4Un9g6X/0DrT/vyv8AhX53a1+2H8UNUuDJBrUGlJziKzs49v5uHP61Dpn7XnxU06dZJPESXyg8x3NlCVP/AHygP615f9r0L7P7j7//AIhpnXJzc0L9rv8A+Rt+J+jH9g6X/wBA60/78r/hR/YOl/8AQOtP+/K/4V8k/Dz9vGOeaK18Z6KtshIB1DSySq+7RMScepBJ9q+q/C/ivSfGOj2+qaNfw6lYTD5J4Gyue4PoR3BwRXpUMTSxCvTlc+FzXIcxyWSjjqTins94v5rT5b+Rb/sDTP8AoHWn/fhf8KP7B0z/AKB1p/35X/Cr2QeKK6jwCh/YOl/9A60/78L/AIUg0PSycDTrT/vyv+FYvxU1S50L4beKdSspDDeWel3M8MgGdjrExU/gQK8+/Z4FxJdeJmuL67vPsi6dYwi5naQLGtlFLnk/eLzOSep49KxdS1RQtuejSwTqYWpiuayh076pfqj1z+wdL/6B1p/35X/Cj+wdL/6B1p/35X/Cvk/9pH9oDxr8Nvi2NK0PUFj0yO1huWtHt43D5yXBYqWAIHY8e1dZ8eP2k30D4b+HNQ8IXIXVtfQXMLGNZDbwoMyFlOQGDfLyOz/3aftY6+R8HLiXAweJjNtOjv5620766fNH0J/YOl/9A60/78r/AIUf2Dpf/QOtP+/C/wCFeT/sxfELWfiD8LJtb8R3i3d4l7NEZvLSMBFVT0UAcZNeCad+1v4rk+KUF5cXpXwLPqrW4ia1QAQbgP8AWbd25VZXPP6UOrFJN9Sq/EeCw9DD16l7VtvJaavstT7U/sHS/wDoHWn/AH5X/Ck/sHS/+gdaf9+F/wAK8e/at+JHiD4aeANM1Tw5fCyuptRS3eTykk3IY5GIwwI6qK83vfGXx48JeBbHx1Pqmj+IdDktor2S1FuBJHE6hssFRDwCMkMcdegzQ6ii2rbGmLz6jhMRPDunOTglJuKTST673/A+qf7B0v8A6B1p/wB+V/wo/sHS/wDoHWn/AH5X/Cvnvx3+0Nfa1+zrH438Lzf2TqX2uO1njZVl8mTdh1+YYIIIIOM4IrH+BP7R+t+KvD/ijSPEtyB4ntLCXUdPnaFYzLH5W4DaAASOGHHKt7Gj2sbpdyP9Y8D9ahhbu84qSfRp7L1dmfTn9g6X/wBA60/78r/hR/YOl/8AQOtP+/K/4V87/Bfxt8RPi78FtZvbTxFBb+JodT8mC+uLaPYkSpEzKVVMHO5ucVifsx/Ev4l/FrxTc3GpeJLefQtKZReWjWsaSTCRJAm0qnGGUE8jihVE2l3Jp8Q0KssPGFOT9srxelvO+vRavyPqP+wdL/6B1p/35X/Cj+wdL/6B1p/35X/Cqni211e+8O6hDoV3FY6s8LLbXMq7kjkxwSMHI/A18rfCT4jfFrxz8XL7wtceK7QxaLcM98Gs4gs8UU6xyKhEeQWBOOlVKai0u5347NYYGvSoSpyk6jsrWtftq101PrT+wdL/AOgdaf8Aflf8KP7B0v8A6B1p/wB+V/wr4++Mv7R3jzwJ8ada03TL1ZtE0yaCR7I20ZBi2RFgX27gCXxnPGRXafFT4+6smtfC268JaqIdH8RODcoYY3LjzYlKkkEqRucHGOfpUe1jr5Hl/wCtGBvWi73ptJq295ct1rtc+jf7B0v/AKB1p/35X/Cj+wdL/wCgdaf9+V/wr5k+NetfGv4Y2OreJR4s0seH1vSttaw26NMkTyERqd0WCQMZyxra+Cdz8Y/GMegeJ9W8U6ZdeF7pXlls1gVJ2XDKBxEADuAPDU/ae9y2OiOexling/YT51rstr2vvsfQP9g6X/0DrT/vyv8AhS/2Bpf/AEDrT/vwv+FfFnwx+L3xc+J7amLXx9oejfYSgP8Aa8UEPmb933f3Rzjbz9RXpHxH8efEL4bfASLWbnxPp+peIX1VYhqOmxxywtAQ3ygFAuQVOePxpRqqScraHNQ4lw+IoSxUaUlTjFyvp03trc+iv7B0v/oHWn/flf8ACj+wdL/6B1p/35X/AAr5A1n4j/G3wh8OtI8e3XifSb/R73ynFo1qgkAkHyhgI1+hw1d18W/jl4isv2efC/jXRJRo+p6jcwpMvlrIACku4AOCMEoCD6Yo9qtdDSHEmGlCpKcJRcIqdmldxfVa2PoX+wdL/wCgdaf9+V/wpf7B0v8A6B1p/wB+V/wr5i+D/wC0drfijwB40sddulj8XaXp0+oWcxhVDLGIiynaABlTg9OQy9eTXf8A7LnxE1n4gfDG71rxLfi8u47+WLzzGkQWNUQ9FAHGSc1UakZWt1OnB57hMdOlCle805enK7NPzPXf7B0v/oHWn/flf8KP7B0v/oHWn/flf8K+KtM/az8WH4nwXl1e48Cz6q1sqNbJtWDIGd4XduVXRzz39K+jPizonxS1PU7SfwJ4i03R9Njt/wDSIryIOzyZJyMxtxtx3FKNWMk2uhlheIMPjaVWrhoSnyOzSSu/Na7HpP8AYOl/9A60/wC/K/4Uf2Dpf/QOtP8Avyv+FfHXwj8f/G/40/2sdG8Xabaf2aYxKb20iXdv3427YT/cPXFan7QXxE+LPwg1jSj/AMJTatZ6omIYYbOJjG0aRiQsWj7s5Iqfarl5rOxyriej9UeO9hP2fey72799PU+sf7B0v/oHWn/flf8ACj+wdL/6B1p/35X/AArwr4m/FzxL8CPhPpi65eWmv+NL+WWKK4WPZBtBLbyqhc7VKDAxkkVxmrXH7QPhnwMfG1z4ksZ4IoReT6K1rGGjhwCc4jHIByQGyADySKt1EnY6q2f0qM3TVKcpRipSSSfKn3138lc+qP7B0sf8w60/78r/AIUf2Dpf/QOtP+/K/wCFfPGvftFal4i/Zpu/GuhyLpOu2tzFaXChFkWOUyIG2hgcgqwIyOM+1ZX7P37Rmt+LrXXtC8VXf/FQR2j3+nXLRLH5qCPdt2gAEgYcccqT6Uvawul3J/1kwLxFPDpv348yfR3vZers16n05/YOl/8AQOtP+/K/4Uf2Dpf/AEDrT/vyv+FeNfsn/EfxB8TPAuqan4jvlv7yDUWgSQRJGBH5UbYwoA6sea8R139rTxbB8VLy7s73d4GtdVS2MKWyFWhBIPzld25lR3HNJ1YpKT6ircSYKhhaOLmny1XZaaq27fkj7T/sHS/+gdaf9+F/wo/sHS/+gdaf9+V/wryX9p34iav4C+FkOu+G79ba6e8hRZxGkgMbKx6MCOcDmu0+DniC+8VfDDw1rOpTCe/vLJJp5QoXcx6nAwBWnMublPYhmFKeMlgknzKKlfpZux0x0LSx10+0/wC/C/4UDQtLY/8AIOtP+/K/4Vwn7QN7c2Xww1D7LcS2ks9xaWjTQMVcJLcxxPtYcg7WYZHTNN+Bc0954c1e9urqe7uLnXNQDPPIX2rHO0KKufuqEiUYHuepNQ6lqns7H0iwUngnjebTm5bedkzvv7B0v/oHWn/fhf8ACj+wNM/6B1p/34X/AAq9RWp5xR/sDTP+gdaf9+F/wo/sDS/+gdaf9+F/wq/SY9qAKP8AYGl/9A60/wC/C/4Uf2Bpf/QOtP8Avwv+FX6SgCj/AGDpn/QOtP8Avwv+FH9g6Z/0DrT/AL8L/hV+koAo/wBgaZ/0DrT/AL8r/hR/YGmf9A60/wC/K/4VfpKAKH9g6X/0DrT/AL8L/hS/2Dpn/QOtP+/C/wCFXqKAKP8AYOl/9A60/wC/C/4Uf2Bpf/QOtP8Avwv+FX8UlAFH+wdL/wCgdaf9+F/wo/sDTP8AoHWn/fhf8KvUYoAo/wBgaX/0DrT/AL8L/hR/YOmf9A60/wC/C/4VfooAof2Bpn/QOtP+/C/4Uf2Bpf8A0DrT/vwv+FX6QUAUf7B0z/oHWn/fhf8ACj+wNM/6B1p/34X/AAq/SUAUf7A0z/oHWn/fhf8ACj+wdM/6B1p/34X/AAq9R0oAo/2Bpn/QOtP+/C/4Uf2Bpn/QOtP+/C/4VeooAo/2Dpf/AEDrT/vwv+FH9g6X/wBA60/78L/hV6loAof2Bpn/AEDrT/vwv+FH9gaZ/wBA60/78L/hV6loAof2Bpf/AEDrT/vwv+FH9gaZ/wBA60/78L/hV+igCh/YOl/9A60/78r/AIVwvxO0PTl/s3bYWo/1vSBf9j2r0iuF+KH/ADDP+2v/ALJQNHWaF/yA9P8A+veP/wBBFXu1UdC/5Aen/wDXvH/6CKvelAgPFUtZ1i00LS7rUL64S2tLaJpppnOAiAZJNXW6Gvnb9pN9T+JPifw98KdFnaAamP7Q1e4UZ8m0RsDPsWB47lUHc1jWqOnBySu+nqenluDWOxUaM5csN5S/litW/u27s8Z8V6744/bF8Zy6Z4cjew8GWUoVWnJSFQOkkxH3pD1CDOB+LH2z4ffsXeBfCsEUmtQy+J9QGGaS8YpCG/2YlOMezFq9h8EeDNH+H3hyz0XR7ZLOxtV2gcbmPdmPdieSa0bXxDp+oXMkFpdR3ckb+XJ9nPmCNh2YrkKfY4rjpYKN/aVvem+/6H0mY8V13BYHK37DDx0SjpKXnJ7tvdmFafCbwTYReVb+ENDjj9F0+H/4muf8Ufs3fDjxVblLnwnYWzkkiawj+zOD65jxn8civTj+VAPNdjo05KzivuPl6WYYyjU9pTrSUu6k7nwd8ZP2LNW8I20+q+D55td06MFnsZVH2qMeq4GJB16AH0BryT4P/GTXfgx4kW+053msZGC3umyMRHOoPPHZx2bqPpkH9SZ3SOItIwRF5LNwAK+Jf2r/AIQaNq2nXPxG8GSW91AlwYdYisiGQOG2ecAO+4Yb1yG9TXgYzAqg/b4bRrp/kftHDPFv9rr+yM9iqkJ6KTXV7KVur6Pe59eeA/G2mfEHwxY6/pM/nWN5HuXPDI3RlYdmByCPUV0NfCX7DnxPl0XxjdeDrqUmx1ZDPaqx4S4QEtj03IDn3QV91oSc5FezhMR9Zoqp16+p+X8SZNLIcxng947xfeL2+7Z+hxnxsZU+D/jYsQM6LeDk/wDTF64z9nXm58ZY5xd2IP1GnW2a9S8UeGNO8X6RLpeq2/2qwmKmSEsVD7WDAHBBxlRkdD0NJ4d8Lab4Whu4tNthbLd3Ml5NgljJLIcsxJP/AOoAAcCtHTbqqfRf8H/M4KWMp0sBUw1nzSfyteL/AE7Hyt8TtKtte/bO0TTb2NZbO6sRbyo3Rka3mDD8QTWbB+zNq3w68L+Pdb8QXUF7bafo13b6KEkLsivvJcggbDtY8DPMjV9eyeF9Jn1ZNVl0yzk1NBhLxoEMq9uHxkdT371evbKDULWW2uoUuLaVSkkUqhkdT1BB4Ip+xTbbPy98L0Kk61Ws7ylKco9lzJKzXWzV/U+JfBXjr/hCf2OdZEUmy+1TU59OtwP+mirvP4IH59cVx+ofDH4iRfAm3jm8MWEXhq3f+3f7QWUfayHjALMPM6bNuRtyNo9K+8JPAPhqWxjs28P6Y1nG5kS3azjMaserBduATgc1ry6fbS2LWksMbWjJ5bRMoKFMY2lemMdulQ6N1ZvpY43wpKtTjTrVnaFNQVlb1bve93btsfE/xd8d/wDCwP2TvBt9JIJb211SOxusnJ8yOGVcn3Zdrf8AAq6DX/2lPCqfs/2PhHSZZ9U8Q3Giw6U9slu6rE5hVHJZgA2Ocbc5OPrX0unhLwgbH7CmkaM1mz+eLdbeExlgMb9uMZwCM+lXdK8G+HdMkS507RdMs5DyktraxxsfxUVfs5Xun0sbLIseqkqka8U504wk3Ft6K11qtWfHmv8AgHUvh/8AsdTQ6tC9rf6hq8V+1tKuGhDbVVWHrhASO2cdRT/in8Nbq0+DPgD4jeH90Go2Gi2tvqPlDl4WhChz64DFWz1Vh2WvsvWtK0vVbEwatb213aZBMd4ivHnPHDcZpTpmmx2EemGC2WyaPyFsyq+WUxjYE6Yx2x0o9irW8hz4VpSUqanaPs4wj3Ti78339j5e/ZI8Y6T4G+A/iHVNbuxY2CazJG0zIzYLQwhRhQTyTXMfsM+MNI0TXPEOjXV2ItT1d4PsUBRj53lrMz8gYGAc8kV9cSeFPDGn6TJYSaVpdtpkjiR7VreNIWfsxXGCeBzjtTNO8GeFdM1CC4sNE0m0vFG+KW2tYkkAPBZSBnvjPvTVNpx12LoZDisPPByjUi1QTWz15tH17bGl4h8QWPhfRrvVdSuBa2NpGZZpipYIo6nABP5V8V/s6/ELQNJ/aQ8Wajc6gsdnrctzBp8pjc+e8t2jRgADIyPXFfbt9Y22p2ktrdwR3NvKuySGZA6OD2IPBrFg+Hfha1mimh8N6RDNE4dJI7GJWRgeCCF4INVOLbTT2PWzLL8Ti8Th69KaSpO9mm7tq3RrSx8yWWg2Xij9s3xppOowi5sbzT5IZYz/ABK1vCD9D714xrPhHWfhv8ZfD3hDUppJbLTtZimsHcYV4pZYzvX6hBkdAwb3r9DZNE0TTtTl1l7Oxtr9hte/aNEkI6YL4yeABye1Le+G9E1q7t76702xv7mLBhuJoEkZMHI2sQcc88Vk6N1v1PAxXCixMH+8tP2jne32ZNPlfo1oeP8A7Zn/ACQu/wCcf6Zb/wDoddH+zWcfAbwpk4/0Rv8A0Y9eiapo1hrlm1pqNnBf2pIJhuY1kQnscEYqS1srHRdPW3t4YLGxhXiKNVjjjXvwMADrW3LafN5H0scuksylj+bRwULfO9z85fgdH8K3fWv+FlvKuPJ+weULjP8AH5mfKH+51r2P43Xfg64/ZbsoPAsrv4dttZSKLzBIGVj5jv8A6wburd/WvpsfDLwgeR4X0Yg85+wRf/E1cPgnw9/ZX9mHRNO/s4Seb9k+yx+Vvx97ZjGfesI0bRcdD5jC8MVsPhKmEcoe9GUeZRfNr3d9UvQ+D/Gvwn1nQPhf4J8Ytd3vibw08EE95pl3O4S1JxhVwfljIO3IwVOPXj039ozxj4f8c/sy+Hb7w2Eg0+PU4IBZqADalYZQYmA6EfqMEcGvqsWGkSWX9jLFZm1VPKNgFTYEx93y+mMZ4xVBPh/4XSze0TQNLW2dxI0As49jMAcMV24JAJ596r2Vk0nozZcMSo061GhUSjVgou6baa6p328j5F+OXwyuNL+G3g74h6AGgnGiWtlqvkjlo3txGJCP91ijexX0qr4E8ef8IP8Asd6/5UoS/wBT1WbToBnn54495/BA/PrivtqXSLGbTP7PktYJNP8ALEX2Vo1MWzGAu3GNuO1ZC+BPC01ktiNC0qS0hkL/AGcWkRRJCBk7duAxGOaHS15kwnwzOniZ4nC1FFyg42s/iaScl62+/U+EdS+GPxEtvgXAk3hawi8M28h14X4mX7XhkwSw39NhGVCg4UelfXv7PHjz/hP/AINaTfSzCS9toTZXfOT5kYxk+7Ltb/gVely6baz2TWkkEclq8ZiaFkBQoRgqV6YxxiqWm6PovheBraxtLHSoZSXMUEaQhyAMsQAM8Y5qoUuR3TO7LeH3leIVWlVcouHK0+62atbRff5ny1+wMQP+E6yR9+0P/o+sH9uDxpo2u+JfDel2d559/o73C30ARlMJcQsvJGDkA9M19f6HoGg6K8n9j2VhYtMA8gsokj8wAkAnaBnGT+dRX/gTwzqd7JdXvh/S7y7lILzT2cbuxxjkkZPSj2b9nyJnPPh+v/Y0cqp1Fe+rs/5ubTXfY+ZP2soY/ir8NfDHjXwvK2raRp0s6TSQxsMI20FyCAcK0RBPuO1bPjn9rLwZrXwav7e1uXfXdR05rP8AswwuDFI6bGyxG3auScg844r6Q03S9L0+yOn6fbWtpaxZzbWyKiJk5PyrwM9axrP4beC0vV1K08NaILvcWF3DZRb92eTuC5zn3ocJXbT33NquT42NarXw9WKdWKjO6bV0rXjr26O58ip4L1Lwh+xfrr6rA9rNqmpwXscMgKsse+JFJB6Z2E/QirHxD+Gt2vwR8AfEbw9vg1fStKgjvWiHLwbcBz67ckH/AGWPYV9m6rpenavaCy1O3t7u3mYAW9yiursPmHytwTxn8KF07TYbJNJWC2S1MRRbIIoQx4wQE6be2MYqXRVrJ9DklwpTcXT5/d9moLTVSTupff0+R8X/AAY8dj4efsq+N9Qik8u9m1J7O0OefNkhiUEe4GW/4DXH2Hwx+Ic3wMuVi8L2M3hmd/7d+3vMPtYCxkBlXzPu7N2BtyQx9a+7/wDhAvDYsfsI8P6Z9i8zzvs32KPy9+Mb9uMbscZ9K149NtorJbOOCNLRY/KWBUAQJjG0DpjHGKXsLpJvoYLhSVWnTo16z5YQcFZdW7tu99Hoj4i8XeO/+E3/AGNdKSaTffaTqcOnT564RW8s/wDfBTn1Br0/4PftNfDvwp8MvDWi6nrjwX9nZxwzRiyncK46jKoQfqDXu6+APDUdlJZr4e0xbORg7262cYjZhkBiu3BIycE+tQ/8Ky8IZ48K6MP+4fD/APE1Spyi00+ljsoZNmOGrxxNKtFy5FB3i3ez30a8vmcx+0RKp+GMgyMvqemhR3J+2wmn/ABg/gi9ZSGVtb1RlYdCPts3Irstf8KaZ4o+wLqVubhbG5W8gXcyhZVBCsQDzjcSM9Dg9QKf4d8NWHhPR7PStJtxaWFonlxRAk4H1PJJPJJ5JJNL2T9rz9LH6h9cgstWDSfNzc1+m1v8jXoooNdB5AtFFIKACloooASilpMUAHeiiigApc0lLQAlFLRQAho6CiigBaSlooAKSlooAKKTvRQAUUtFABSUtJjFAC0UUUAJRS0lAC0lLRQAVwnxQ/5hn/bX/wBkruq4X4of8wz/ALa/+yUDR1mhf8gPTv8Ar3j/APQRV6qOhf8AID0//r3j/wDQRV49KBCMcCvJfAlla23jD4ieOdRkjgWS7NhHPOwCw2tpGFc5PQGQSE/7o9K9af7pIGSK+WP2qdauvDngnR/BOnForzxLq1zJIIzy0RuC+0/7zyp/3yRWNSytJ9Dmx2aLKcvxFfq0lbvd3t82kjtPCur6h+0Fe3Gr3Uk+l/Dm3kaO0tFYxyasVJDSTMORCDxsH3iCG6EV7Boo06C1jt9M+zLawARrHa7QkYHQALwK4fwZ4N0jULK40m4tYrzRtDdNKtLG4UPERHGjNI6EYaQsx5OcADGCzEt8S/AjQrmX+0fDKf8ACG+IIgTDqOjIsIJ9JYhhJVPcMOfWrjdLueNhY4mjSVZRU5v4nezb6paWSXRXS7vdno2oX8On2U11NIsUEKNJJI3RVAySfoBXH/DTxdq3iqXXhqllDZCzu0igEJJJR4IpQHz/ABr5mGxxnpXJ+Ir/AMX3vwn8Tab4o02ys9UnsLmwt2065aU3srRsquibRsBHOCxIAJO0Amt7wDr1pYfDDRNWVmu7jU4I7rEYG+4uJQGKj8SRycKF5ICkh3uzdYx1cRBaxiouTT08rNeR03ijxHJpUPkWdjJq2pyAmGxhdULgYyzMxAVQSMsfwBOBXMeAPCdrqHwzk0/UPDcHh2LUlnF5pEUplVQxKn5uMllAYn1J+tVfgReXnifR9V8WalPHc3Or6hOsLxAhY7aGRooo1z/CCrt7lyepr05lG36UWUtTuweIq1oxxEJuMZaqPTe8W+t/yufljpCT/Cn40WqSyMsmh60sbuOC6RzbWP0ZQfwNfqfGcjP8q/Nf9o7SWvP2lPEOn2g/e3V9bogA/jkii/q1fpNAMRgV4eWLklVgtkz9s4/q/WqGXYuXxTp3f3Rf5tknelpKK94/IBc0lFFABUc7iKF3OSFGeBmpaoa5psur6Rd2UN/c6XLPGUW8s9nnQn+8u9WXP1Uj2oA+Rf2fvg34xtfEvhCPxBpx0/RrfwS9vfRMMGJ7u+M7wbscyOIz5mPuK+OCQx9O8J/ETx1d6zrWp6jpN3beHNO03VJ302OxxKkkVyYrOKH5d0krQwSyMOR++iwBkZueN/B2r+B9ETUZPiT8QdUeW6t7KK0sjpIlklmlWNADJbIoG5hyWHFYHgy9svG1ss8fxl8a6UXnhtIYtTk0mCSaaSCOcRoPsp3MBMoIHcHGRgkAkvNK8Z674b+Fuh+NLibWL/Wtas9U1VotN2R2MdtbLcmBzGCvNzFGNzYzvYYwuKi8C6r4h+J/x6s9Q17StU07TfDseqzWUN1YPDBHI1x9jgKuyAu5ginkYliMXChfummeI9X0/wAP+AT4xh+MnjnVtBW+FhJcaeumP5biYwuxzaD5UYMSR/CMjIxnb8NaPH4jeOGL4z+MLXUJbm9tYrC5l0pbiY2txLBK6R/ZCWXdC5BHbrjoAB6xTt+0l4lu/FFle3OmWuk2cHhdRaSTW7eaZPtjKQpQTbhGpJwQmP4STWJr1zqXgvxR8Q/EGgeHbpl8IeG7Hw94es1tJXidpD5sroFG6RFzahghJxAw610PibwjqHhnU9Bsrn4n/ECZ9YvPsUMkEOmtHG5RnzIxswFGFIHUnPAwCRF448Kax4KttM2/Ef4havf6ldixs7Cx/sgSzS+XJKRmW1RABHFIxLMOF4ycAgGHH47+Iw+Fd/rNq+o3esJ4hnS3sbrS1t7ubTIJfLaNFMewTSKjSqzKQS+wdsd1a634rf42QaObi4uPCsWmBpJktVTF3GBvEpKcrKtzCyNGwAMEqY4auL8V2uq+FfBFn4ofxz8Ur20ntzdzW8NtpaT2cKwtM7zrLbIE2qpBUncWIUAmtfxp4V1LwL4ZbWZ/ih4+vIzNb20Vtb/2UJJJJ5khiUGS1VVy8ijLMABnJ4oAdr6XH/DSqXfiO0vrjw7Y+H0OhLHZyT2xvXmdbhsqpAmEYjVc87HfHBao9c1/xdo/xCsfCXhHRpNN0CwfSUj2WimCWGWaV7xmc5CpFBAUAXDeZMnPKgx6JpC6nbW/2z4y+MtD1Oa2a5k0nVZtJhu4I03by8f2U4C7W+YEqQMgkYNWIdC065ltUh+P2vSS3ULXFuqX2kEyxLv3SIPsnzKPLkyRwNjehoAo6R8RPHer/HqbRDa39r4TXVrqMTT6YViFrbWUQIWXZz5tzcFgxP3YMKeSKytZ1b4ga38Hdev9RkuryTxPqSaZpujXOho76fZS6g8RknjKHeDasrMHXA2c8sTWl4eXTPEUHnQfHXxPCslxcwW5mu9IX7SIGIkkixanegwTuHYZOK0NR0BbXwZqvii1+M/jDV9K063mnkl02TSp93lglkQi0wX4Ixkc8UAaWm+JfFOqfF7UdHh3aH4V8Pyohg+wOx1KI2gfekhj2BfNlAGxwQbZhtbedlr4R6r4vHw5fxV42u7qe4u7Z9Rj0j7AsVxZQ5eRISqAF5PLKAggEFcYzknmdDsrHWdI0e+b44+KtOk1WwTU4LO/uNJhuPJaNn3FDafwqr5xkDY3PFX4NAsrkWPk/HzxBKL4yLabL3SD9oMf+sEeLT5tvfHTvigDivBK6h4E1n4m6xp3h248U2VnZXHifQryWxeK9Fzeb5Z9NYlQztvij6Dcqsqt0UDphr3xHu/B2gG21Rp9a8Q69bxJdQ6ViLTbIQiScyJJGpKHyZcE4IaZFDtgMYYpvD0t3d26/tD67us4I55na90kRqkhkVDvNptJJifIBJGOcZGdSHQLCc2ixfHzxBKbuSSG3C32kMZnj++qf6J8zLkZA5GRmgDUSXx6nxTt9GGoTXHh220uwu7nUWso1jlmDXSXMeQPvSbYG2qfkxngHB4fwx4y8TWvhbQ7xLG90S68Za/qVxe366CWmsIVEotBLCkYzI6xWyl5AcjcM5Kkbdjp+m6pq2mabY/HzxJf3mprObOO0udKlE/khTKFK2ZBKh1JHXGfQ4xPHt7/AMK58Qpo2qfFH4htO2lz6okkEelNG6RctECbUHzCodgMYwjc0AdV/wAJN421X4wxeForh9N0fSIrKa6vpNPYjWA0cpn2NsMaAMsS8OpUlx82VA579p/wt4i8QeJ9A1DQbCS4XR/DniGeSdYy5SSS3hjijjXB3SPmRVH1POMHcHh2xD3y/wDC+/EAaxMi3Y+26Rm3KD5xJ/onybe+cYqDxfoDeDvD761e/GPxnJp8V3BZTTQvpRWB5Zkiy5NoAqq0ilucgAmgDBsLHxX8Hfhh8PdOg0uaTXX0+Gx1K4sLf7S1lDa2MkiW8QCkF5JUCAsCC0r4/hA6jTb34lat4q8E6ReXraQbTw/BqPiW5isUltrm7M0QNvE5HykiO6DFSdodDj7prI0+ybUdNtLlPi340t9QuYIrtdHup9HhvVglkVEkeJ7YbQd6nBwfmC43/LTtAhsde0O11L/heXinT/tGnJqjWt7c6RHNBbMARJIv2Q7V+YDd0yetAHLp4y8R+CvBuo+JbDw/rDan4t8U6le3f2fTJJLi3tLaCUW6BCh2tJHZ28YZlKgzMeuKkV/iN8I/hz4FsPCumzaqq+HJrvV4Xtizfb3uLV3ZRtD+YxnuyE9skfLiup8NaZH4t1zV9G0z41+LZ9Q050zCs+ks08b28E6zRgWhLRbbiMb8Y3ZHpnnfCviLT/FFzPF/wt3x7pa2/wBu+0z6n/ZMMdv9lmgife32UgbvtMLqe6sM4PFAHXag/iOb4keBbHVIZtSgsbfVteuZm0qNwr7vLs7dZQpWOVYp5FJRgW2HqHrzXwx468aXlv4z+J974e1G68Saf4bsbPTNNudLmiWKW5f7ROiJsV5I4t9urdWb7O5yMjHpR0GwV5UPx918PDai9kU32kZS3IDCZh9k4TDA7zxgjnmrml+B/wC3bgwad8b/ABRfzeStx5dtcaVI3lMAVfC2f3SCMHpyKAOz+GR1yTw0Jtf1T+1rueeaaOX7L9n8uEufKj2lEJ2rj5ii5znGME9b3rF8J+Hrjw1pS2Vzreo+IJQzN9t1TyvOIP8ACfKjjXA7fLn3NbVAC0lGKKAFopKKADtRQKKAClpKKAClopKAFpKKMUAFLSGgUAFHWiigBaSlpKAClpKOlAC0lFFAC0UlFABRRRQAtJRRQAUtFJQAUUUUALSUUUALSUUtACVwvxQ/5hv/AG1/9kruu9cL8T/+YZ/21/8AZKBo6zQv+QHp/wD17x/+gir1UdC/5Aenf9e8f/oIq9QIDXxh+2TqjaD8bfA+pyKzW1pbwzgdiUuSzY/AL+lfZ7dDXzN+3D4Cn8Q+B9O8Q2sTSzaLK3nBRnEEm0Mx/wB1lX8CTWNZNwdj5HiqjUq5VUdLeNpf+AtM9G1dfEHgLxLf65o+lzeI/DurMlxeWFm6i6t5wgQywqxAkV1RAUzkEZGckVfsfivPrhWLTPB/iRrlhkjULH7FFH/vySEDHrt3HHQGuC/ZO+NFp478GW/h6/uFXxBpEQhZJDhriBeEkXPUgYVvcZ/ir34YB4q4vmXMnuduXVFjqEcThatoT1tZOze6XbXvfyOf0vQbozNqOtSx3GoOpRY4c+TboeqR55OcDLHlsdAMKPOvh34O1fwN8KZZbq3e51DTrS8Ol2KqWaNGaR4wV6mRgVB9Ogxls+zthhgjNRXE0UMDySsscUYLMznAUAckmqt1PQqYOnKSm3ZpNX9bavvayPLPhM9z4T8CeAdAudLuNLvGH2eaCfZlisEkkjgKxwDIO+DzyK9VkkCR7j0xXknw68R/8LU+I2reKLXLeGtHhfStMmI+W5lYq1xMvt8kag8gjJB5IGf+1N8Xl+HvgeTSdNkaTxNram1soIQTIin5WkAHORnC/wC0R2BxlOrGlTc3sjr4ewlTM508LhdU3yxfklZy9NG79tT5u8AWB+M/7XV5qsa+fpdvqUmpNMh48mE4hP4ssf4E19/p09K8P/ZY+CTfCbwYbnUoQPEWq7ZrvPWBR9yEfTJJ9yeuBXuCjH0rlwNF0qfNP4pO7Pu+K8ypY/HRo4Z3pUYqEX35d383t5JC0tJRXoHxQUUUYoAWkFLSetAHLfEjwHbfEbQINIvBC9muoWl5NFcRCVJkhnSUxlTwQwTb+PQ153r/AOzo994wXVdM1Gy0yw+1QuNPWx+SG3QabiOPa4CnOmqBxgCQ8fLz7aKO9AHlknwXN/4ATwrqV5Bc2Q1ubUpCISBLDJeSXBiYbupEhQt+OO1cd4G/Zs17wZeaBet4qs9TvdO8yaWe509gZrjzNUdHwJeBnVDvGcnyuCN3Hr/xM1K40b4ceKr+yla3vLXSrueCVBykiwuysPoQDXzN4M+OXiuHxPE93qz6lb6Tok+hz2d0rBbvV4L6zhNwfLRmLSLeQ7VUYJbHGdwAPprxJ4WuPEa+G3kukim0vUIr+UrGdspWN1KgbvlyXz1OMd657xd4E17xzoHh2S+uNLg1vTbx72SCS3eayk3289u8JG9WI8u4PzZ5ZQcYOK8ytv2q9WnsIb3/AIRy2FvPFDFGq3TvILiSK2cfKsZygNzjjLHbwMnFJP8AtWarZ3VpZz+F4VvJ4p5OLw7RiBfs/wDBkedc+bCAcEbRnngAHZy/BfWrT4eeG/Ddl4hiuHs0s4tVfU45p4NQSCIKEEfnDyld1VnVT8+CGyGbPT+JPDPiLxh4KvtLu59Kt7ya7PyS2f2q0ntFmBEU0bn5vMiXDYI2lzjO3nxP4iftPa5/Y3jPTNJ0+2tb62guhZ6ok8ihY1t9TkWRQ8QLODpxA42kvwSF3N6DovxjvfFVx8RdLht47U6FYyzWl/Azt5hWW7gPDovzK9ockZXJIBO3cwBxVv8As2+JptSvLF/EEUNpb6asNtqMlqZGkme21CAIitKSIoRegBXySEQbjyRZH7Jd3Ppl9bXPiRGe7S5VpRBJIyecdYJO55WdiP7WHLMSfJJJy3GN4J+OPibwnoFwdUjn1acTRSvBqt2rSxQrp9tcSFJET5jIZiyqfu/MCegEvxC/af1r+xfGem6RY21re20F39j1RJpAqxrb6k6yqHiBLg6cccbSX4JC5YA29X/Zl1zXbgSXXim0jWSW7nlht7OVIw8zTNwomwwHnAfPuxsyoUuTXdT/AAbmm8Ha3oEWrmzj1XU7W9ea3hAaOGMWwkiUEkZdbdhkggb+Qcc+d/H74i+JvA/xAVrHVZ7fRTo8FvLAgXbFcTy3Hl3BJBOd1usQH/TYcGjxB+1XqmkS+I4bbw/ZXR0triWKZ7qWOKeGKLUXOC0QO4nTmXgbcyHBYJlgDM139nHxPC2s2FpeJqOm2uiOllLPGonuZC2r+VbA7wEKLewqXK7WAGAMHHR3P7Nmt6td6ddXXiS2hC3Zvbi2trSSOPf5qOAoE3PyoB+83gHJUAmop/2n7+y1TU7e50K08mC4vI4ZFvDnbB/a4y+U4YnSRwM4Ex/u8+keAfiNe+JvD+q6zfaX5FtbX81nbwWLNcTSrG+zeV2jByD8ozwM57AA5Kb9nieS40wJq1vHZ2mladp5iFocl7WG8iDj5sAN9szjt5fU54x5f2W538QW+of25C8KvbtJAYpkX9zBZIhASZVY7rLd84YDevBK863xU+J+p+GfjB4K06JdXg0QTP8Aa47LS5p01FpLS7ZY1kRGGY2gjYqCCfNBPCNXlE/xc8Wahonizz/EGraXe2Eer6tGslo9oYZYtNsriG1XzYlLRxyTT/KRlgiluCMgHregfBDW/A13FqWiarYXeoW8FwkUd5assZZ7Gyt0J2vnAexVz6q5AwRk3PjR8CZvizNJcw6wulXi2kdtBIbbzfKO9xKfvDIeGWWPHbdn2riLPxtqk2qag2qeLtSsbO5GsvcLaqryQiz1iK3t4YEC5V5YmaIbcsxcEZbBrsNBHiRPFPw60zUdav8A+2xp02oa3b+erQmGNPLWNwowZDLPF84xu8hyAKAObuv2UXvdSmnm1yIRy6yl9MDDNI1xZia8ke1ffMVVW+2EfIqj5SSGLfL1I+Ah1L4JWngDXdUTV919DealePAVF4BfLdSoV3ZXcAUB3HGQecV518V/i/4o8D+OYNWj1G4GiWkus/adJwpEoSKztrNBxnLXM8bj/rseoxW0vibxI/wY8G27eJJ73xIdTmt7xY7lLa91SOL7ZlI5Cu2NyIPMG7YrCBl3DdmgC1N+zbr+p69aajqvjFNRktkgTe1q6tJ5Rt/mZRLs3sLfJfbuJkIztVVqrY/st6rZvEsniO1u4bfSYtOhhltpkUFUtFLDZMu05tSwkX94DIvzYiUHu/DvjsXkHw3vINYfUrDVNOY3U9wiQtJutY50nlQcRtwMr0HnfSsH4lfFfX/BHxNvrLToIdSt5dLsjBaXcxiiikKatNJJlVYkstlGmPp0oA0vhz8DrvwP4jtdYu9ah1K4jidJDHZiDezWWn2xIAbCjNgz4A/5agfw5PLSfsu6nbaxd6hp/ieO1+02gieAWrrmf7fBcyS70kDKWhtoYcqQy7A4YEAVQPx+1TUfGtrdzxrp+hbXjW1S7IOUkAaSb92eOGwBnI56ivWPg58Rrr4leHLu+vrBdPu7W8a0kjjL7W/dxyBgHVWHEgGGUHjoOlAHiOg/s5eLNH119CguxHpcOkpCuuPAqiSZYNLhKrtnMoDLYuM4VkJLBidtexfBj4Ry/Cq0vo59Rj1Ka6WBTMkTIcRoV5LOzHkk8knk8nJNekjFBoAWiikoAKKMUdaAFpKKWgApKKKACijpRQAd6KWkoAOtFLSUAFLSd6KAFopOKO1AC0UlFAC0UnSloAKKKSgBaSjFFAC0UUlAC0UnWigAoopaADtSUUtABSUtFACGlopMUAFcL8T/APmGf9tf/ZK7uuE+KH/MM/7a/wDslA0dZoX/ACA9P/694/8A0EVeqjoX/ID0/wD694//AEEVeoEB5qtf2MOo2VxbXMKTwTI0ckUgyrqRggg9jVqkxkYoE0mrM+EPjH+zd4n+EniP/hKPAxu59KhczxPZEm5sD6EDlk5I3c8cN6nc8Bft1ajptvHa+LdEGpFBg3tgwilPH8UZ+Un6FR7V9oNHnPAz61yHiL4PeC/Fly1xq3hnTLy5fl52t1EjfVxgn865/ZOLvTdj4Cpw3icHWdbJsR7JS1cGrx+W/wCWnQ8Rv/29fCaWzmz8P6zPc4+VJ/KjQn3YO2PyrCstQ+Jv7VMqQzxP4L8AM37549we6X+6GODJ36AJ65IxX0FovwM8BeHbhbjT/CelRTqcrI9uJGX6FskfhXVahoNnqsXlXkCXMGMeTJzGfqvQ/iKfJOXxM7aWU5li3y5rib0+sYK1/V6O3lpfueY3XjbSvAOjW/hL4f6M/iTVLOMW8Vhp/MFsf71zP91OckgncxPTnNVvhv8AAeez8Vy+OPHN7H4h8ZTkGPaD9lsFxwkKn05+Y/gMkk+vWOmW2m28UFrbxW0EYwsUSBVUewHAq0Bij2Kk05622XQ/R6OO+p4d4bAx9mmrN/aa/lurWj5Lfq2kNjTy806lpM1ueWFcr4z+KHh3wBf6daa3dz201+kksJitJpkWONo1d5GRSsSK00QLOVX5hz1rqvwrzrx/8LIPH3xB8M6lqatNomnabf29xapdSwmeSWayeNXVCBJHi3k3KxKn5cg9gDtdB8QWHibSoNS02f7RZTg+XJtK7sEg8EAjkGtAnANeK/Cj4PX/AIB1xJ7iw0yeCRIGaWOZleG4UXglnVdmHZ1mhjySDtzz8qg+sJpd0tjewNqt28s7u0dwUiD24Y/KqYTaQvbcGPqTQBmeNviLoPw8sobvXLqW3glLhPItpbhsIjO7FY1YhFRWZmI2gDkirGheONF8SnWBpd59tOk3RsrzykY+XMEVyg4+YhXX7ueTjqCK8l+JHwU8R6t8L9E8N6XqX9rapZ2c9g+o3l39kdEltGgODHGQ0eSCyEbiOQ+4DPovgjwldeGdY8XTztG8Gp38FzbeWcsESxtoDuGBg7oH6Z4x9AARaV8Z/CmsarZ6XFd3cGpXd4+nw2V9p1xazGZLf7QylJY1IAiIbcQB8w5yQKs6F8V/DHiO11a6stQc2+lxfaLmS4tpYAISHKzJ5irviby5MSLlTsbBOK5XSvhprEUXhC7vJbaTVbbxJd69qzo5Kt51tdxLHGSoLCMTQRjIHyx/QVd8E6L4r09PFeraxpemHxFfsXgMGotJDIqK4gt8mIGJEGMnDZaSRsDO2gCxd/GjwbeaE9xcjUp9NlmaxuUk0O8byXKp8lwhizEGWaMjzAAwcEZFZr+MvhdqWn+JpprOxkstKhkl1JrjSGCSRM+xmTdH+/VntduY9wZoVHJC1S0L4eeJrvRdBtNahsYZH10azr0sN00xvHjXzIyuUXaBOkACHO2OBV3GuUHwD8U6paalaXV9YabDb2yW1mYW+0re+XcXk0bTIyr5YBuIHABYh4upA5AO61LxV8MtJiNpfaXBa2EthJd+dLoMos5LZbbe583yvLIEKgFc5wAuM8UxPHHwvMWiBdPt4xePHZW0b6FKhtzBciKJJVMWYAk7hU8zaAzfLyayNX+EXiTXPDd5YXV3YXE9v4Mbw/p7SEhGuplxcvINpwh8q2VThiMPxzg83p/wK8V2WpaFe23lWTx3rTP/AMTy5eSziOpLdNucrm7Z4/NQ+YeC+MkZIAPbLj4beEbgXSz+F9GmW6l+0XHmafEwlk+c73yvzN+8k5PPzt/eOcnVtZ8DeAddFlcWNrYaj4gYee1rppbz98ixhriSNCFDSShQ0pAJcjPWrer6VqnxC+GtzYzyT+FtU1SwMciwukz2rumChYqQ2M4OB2OCOtcV8SvhRr3iTxD4alsrlbqG3a1W9v7q88mZ0ivoLgh40i2SjEbbQNhDYySGNAHRrq3w61rwdL4q+yaZe6FYTtILw6eH2y2zGENGuzcWUqUQqCTwFyCM4MXiP4RavdwWR0bT5ZtYuRJLHN4fcD7R58sCm53Q4ikM3nxjzdrFi4GSTV+X4c6ofhX4n0DZaz39/qOpXturXDxpia+luIsyKMowV15AOGHRgOeT0T4VeNLKz8PafdR6fLawa62vTXcmoySTwu1/PPIjr5YS4zFIiqSq7JCzj7qkAHS698Wvhtc299JrVnO3ktHBcwaj4euvOwitcKTE8O4ogRpN2Nq9cjIrn/iRZfCnXF1LQ9WsbjRpJSdQu2sdFli/tEMwgO2TyCtyzNehR5ZZ98wKENghviz4R+KtS0W9u7VNMudf1K+1V7qOe5eKJYrm3e1tyHEbEmKFLYMNoBw5B6Z1/FHwt1vWofEU5Fpc3Ih0u00iI3LQ+XHazJcPLvCny5Wlzjhl/cRFgRuWgCpomofB60ibSTZ2l7/bdxLq1y+oaSzqZZJ7mT/SXeLbG6utyqpKVYbGUDIxXWWXxa8C6bZaGLK48m01wiW0Ntp8wjJkmWIPLhMRbpZFUGTblmrzXwz8B/Emk+JfDl1cG3W1jmjv9Qnj1OV2aRbm9uBGyGPExU3aqJMpnLllOEA6a18BeKbHSvA+hS2enXuiabL9q1FPtrxvLMkweDA8s7kQ/vCMqWdI+QobcAejeHPEGgfEPSrXWtLki1SyhuZlt7kxH5JY2kgkKbhkEESLuHUE4JBrG0e98FfEdtSWLSItRjsdQZ5pb/SHSJ7uJmhMkbyxhZXQwlN6FsBQM4xVz4a+GbvwnoN7ZXrRPLLrGp3ymEkgR3F9NOg5A52SLkeueT1rxDXf2ePEut+FdV0doLRZJNV1fUIZ7nWLi4hf7TFqItysDJst2jku4GPl9SpbkqKAPdtY8I+E5LXWbq+8O6deJfIsuoD+zkne8EfzJvQKWlK4G0YJzjHNUNC1vwXo+n2t3pNtaafbSXf9hQm2sfJxKk0ieRtCgqBL5nUBQST3yfEPFP7Ofi++1RY9IfSLLTIDqDWnlzeW0K3H2r5B+6JVf30XCFR9/dvworvovhTrq+ALPRluLaPUIvEk2rmZZWwsT3Usq4OM7trjj1B5oA7uw0zwrr2sa8I7G0vdQtrxY78zwbyk5htpVALjH3FtW+XjKKfvLw658JeEtYa+0288N2FzGFi8+O60xWikAZ3QZZNr7WeQ4GcF2PBbnzj4PfCLWfBVpcQ3Vlp+iTTyLKl7pFwsskAW10+J0CyQ7WEz2srMeCPlxkncsPxU+CeteOfGGr6lBJZG3lsGSyFxKwaG6EW2OQDadpV/mDDkcEc0AeiaTYeD/Fst9eWem2twlvcXGmXJazKRySI0ccylWULLg28abuQPK2g8EVQ0fxv4F8e69FHBbC8vp7cy211eaTLHHdwpuUtDNJGFlUCd8bGPyykj5WJPm8XwC1qx1zRLixt9KtoYNev9UlljkKPCk2rJdBkAT5na2QwNyMbguSua86+Gf7MniRNHaK722F7BpkNlc291bNH50qmUH98pZZFCTMgZcjZFEO5VAD6vj8F+GYLyW8i0LS47uXb5k62cYd9oAXLYycAADngAU3QB4d8PX1z4e0aztdMlt7eO9ls7O2EKLHIXRG+UBckwsMdflGeMV83eLf2YvFc3h7V9M0EaRbxXudkaS7AjB9WMTjdEygot1YrnbuCxEIVKRtV7Uf2a/Eer6vrst1Boxgvbq5mMzTs73e/+1zC0g8vqn260UZJx5Jx91cgH0lp/iC21K7uLaKO7SSD7zT2ksSN87J8rMoV+UJ+UngqejKTPb6raXj3KQTxzNbv5UwRwfLfaG2tg8HDKcHswr5k1L9mnxXq8t4L64028t5jcOIprh3BZk1jy2IKdQ99at7GNiPujOjq37Pmv3Pi63vreOxgtF1z+05jbXKRSSllsP3x3QP8AOrW1x93DN5uA6h2oA+kvOX1zVHUPENhpkkcc0xaeRDJHbwo0szoHRGZY1BYqrSJkgYG4E4FfO8P7OHiDS49GuNP/ALKXU9P0SzsxPJLJzcrBqS3J3Bd213u7ckjBIU9Nq1HoX7OviLTrbR5JYNK+220d7D9oEih4Y5L+0uY1UpCigBIrgEKFAMhxkMTQB9MmdMZzn1x2qlfeIbDTdR02xuJtl1qMrw20e0ne6xtIwyBgYVGPOOlfN1j+zh4lksbiO9GlCVIZvIZbh333vlQqt6TsG2RnjZieWBAOSTxq+Efg7428N/EK/wDEzppd0n9ozX8Fmt35SSsyagoJKw5UsLm3BZvMb5TyQqqAD6EsdRi1CEyxrMiiR48TRNG2UcqeGAJGQcHoQQQSCDVmvA/CnwQ13SPibp/ia7ksZEt9UuLgukzNKLaV9Xbyxle5vrTK5wTGf7i5985oAKKKPwoAWko/Cj8KACij8KPwoAKM0UUAFFH4UfhQAUUfhR+FABS0n4UfhQAtFJ+FFABS0n4Uv4UAFJRS0AFJRRQAtFJ+FH4UAFFLSfhQAUtJ+FH4UALSUfhRQAtJRR+FABXC/FD/AJhv/bX/ANkruQwJI71w3xP/AOYZ/wBtf/ZKBozdF+KmzR7Ff7LztgQZ+0f7I/2auf8AC1v+oX/5Mf8A2FFFAhf+Frf9Qr/yY/8AsaP+Frf9Qv8A8mP/ALGiigA/4Wt/1C//ACY/+xpP+Frf9Qv/AMmP/saKKAF/4Wt/1C//ACY/+xpP+Frf9Qv/AMmP/saKKAF/4Wt/1C//ACY/+xo/4Wv/ANQv/wAmP/saKKAD/ha3/UL/APJj/wCxrN8Q+O7LxLol9pOo6L9osL6F7e4i+1sm+NhhhuVQRkHqCDRRQB5T/wAKQ+EP/RPj/wCDu8/+Lpf+FIfCH/onx/8AB3ef/F0UUAJ/wpD4Q/8ARPj/AODu8/8Ai6P+FIfCH/onx/8AB3ef/F0UUAH/AApD4Q/9E+P/AIO7z/4uj/hSHwhBz/wr459f7bvP/i6KKAD/AIUf8If+ifH/AMHd5/8AF0f8KQ+EI/5p8f8Awd3n/wAXRRQAf8KQ+EP/AET4/wDg7vP/AIuj/hR/wh/6J8f/AAd3n/xdFFACn4IfCEnJ+HxJ/wCw3ef/ABdJ/wAKQ+EP/RPj/wCDu8/+LoooAP8AhSHwhwB/wr44Hb+27z/4uj/hSHwh/wCifH/wd3n/AMXRRQAf8KQ+EP8A0T4/+Du8/wDi6P8AhSHwhBz/AMK+OfX+27z/AOLoooAP+FIfCH/onx/8Hd5/8XR/wo/4Q/8ARPj/AODu8/8Ai6KKAD/hR/wh/wCifH/wd3n/AMXR/wAKQ+EP/RPj/wCDu8/+LoooAP8AhSHwh/6J8f8Awd3n/wAXS/8ACkfhD/0T4/8Ag7vP/i6KKAE/4Uh8If8Aonx/8Hd5/wDF0v8AwpD4Qk5/4V8c+v8Abd5/8XRRQAf8KQ+EP/RPj/4O7z/4uk/4Uf8ACHH/ACT4/wDg7vP/AIuiigA/4Uh8If8Aonx/8Hd5/wDF0v8AwpD4QnP/ABb489f+J3ef/F0UUAJ/wpD4Q/8ARPj/AODu8/8Ai6P+FIfCH/onx/8AB3ef/F0UUAL/AMKQ+EP/AET4+v8AyG7z/wCLoHwQ+EI6fD4/+Du8/wDi6KKAE/4Uf8If+ien/wAHd5/8XR/wo/4Q5B/4V6eP+o3ef/F0UUAH/Cj/AIQ4x/wr44/7Dd5/8XR/wo/4Q4x/wr44/wCw3ef/ABdFFAB/wpD4Q/8ARPj/AODu8/8Ai6P+FIfCH/onx/8AB3ef/F0UUAH/AApD4Q/9E+P/AIO7z/4uj/hSHwh/6J8f/B3ef/F0UUAH/CkPhD/0T4/+Du8/+Lo/4Uh8If8Aonx/8Hd5/wDF0UUAH/CkPhD/ANE+P/g7vP8A4uj/AIUh8If+ifH/AMHd5/8AF0UUAH/CkPhD/wBE+P8A4O7z/wCLo/4Uh8If+ifH/wAHd5/8XRRQAf8ACkPhD/0T4/8Ag7vP/i6P+FIfCH/onx/8Hd5/8XRRQAf8KQ+EP/RPj/4O7z/4uj/hSHwh/wCifH/wd3n/AMXRRQAf8KQ+EP8A0T4/+Du8/wDi6P8AhSHwh/6J8f8Awd3n/wAXRRQAf8KQ+EP/AET4/wDg7vP/AIuj/hSHwh/6J8f/AAd3n/xdFFAB/wAKQ+EP/RPj/wCDu8/+Lo/4Uh8If+ifH/wd3n/xdFFAB/wpD4Q/9E+P/g7vP/i6P+FIfCH/AKJ8f/B3ef8AxdFFAB/wpD4Q/wDRPj/4O7z/AOLo/wCFIfCH/onx/wDB3ef/ABdFFAB/wpD4Q/8ARPj/AODu8/8Ai6P+FIfCH/onx/8AB3ef/F0UUAH/AApD4Q/9E+P/AIO7z/4uj/hSHwh/6J8f/B3ef/F0UUAH/CkPhD/0T4/+Du8/+Lo/4Uh8If8Aonx/8Hd5/wDF0UUAH/CkPhD/ANE+P/g7vP8A4uj/AIUh8If+ifH/AMHd5/8AF0UUAH/CkPhD/wBE+P8A4O7z/wCLo/4Uh8If+ifH/wAHd5/8XRRQB3/w9vfDnwt0ebSPDHho6bp8s5uXiOoSzZkKqpOZNxHCKMZxxVX4ifE37SdP/wCJbt2+Z/y3z/d/2aKKBo//2QAA" />
                                 <h3 class="text-center tax-invoice"><strong>TAX INVOICE</strong></3>       
                           </div>
                        </div>
                     </div>
                     <hr>
                     <div class="row">
                        <div class="col-xs-6">
                           <address>
                           <strong>To,</strong><br>
                           <strong>{{ $customer->fullname }}</strong><br>
                           {{ $customer->address }},<br>
                           {{ $customer->state }},<br>
                           {{ $customer->pincode }},<br>
                           GST NO - {{ $customer->gstin }}<br/>
                           STATE - {{ $customer->state }}
                           </address>
                        </div>
                        <div class="col-xs-6 text-right">
                           <address>
						   	      <strong>Customer No: </strong>{{ $invoice->id }}<br>
							         <strong>Invoice No: </strong>MI786922122-{{ $invoice->id }}<br>
							         <strong>Invoice Date: </strong>{{ $invoice->invoice_date }}<br>
                           </address>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <table class="table table-striped">
                              <thead>
                                 <tr class="product-line">
                                    <td><strong>Sr No</strong></td>
                                    <td class="text-center"><strong>Consignment No</strong></td>
                                    <td class="text-center"><strong>Booking Dt.</strong></td>
                                    <td class="text-right"><strong>Origin</strong></td>
                                    <td class="text-right"><strong>Destination</strong></td>
                                    <td class="text-right"><strong>Zone</strong></td>
                                    <td class="text-right"><strong>Product</strong></td>
                                    <td class="text-right"><strong>Actual Weight Kgs</strong></td>
                                    <td class="text-right"><strong>Chargable Weight Kgs</strong></td>
                                    <td class="text-right"><strong>Amount Rs.</strong></td>
                                 </tr>
                              </thead>
                              <tbody>
							    @php $i = 1; @endphp
							  	@foreach ($products as $product)
                        <tr class="product-line">
								    <td class="text-center">{{ $i++ }}</td>
                                    <td class="text-center">{{ $product->consignment_no }}</td>
									<td class="text-center">{{ $product->booking_date }}</td>
									<td class="text-center">{{ $product->origin }}</td>
									<td class="text-center">{{ $product->destination }}</td>
									<td class="text-center">
										{{ $product->zone }} - <br/>
										@if ($product->provider_id == 1)
											<strong> TNT</strong>
										@endif
										@if ($product->provider_id == 2)
										    <strong> FEDEX<strong>
										@endif
									</td>
									<td class="text-center">
									@if ($product->product_type)
										DOC <br/>
										<strong><?= $product->class_id != null && $product->class_id == 1 ? '- Express' : '- Economy' ?></strong>
									@else
										NON-DOX <br/>
										<strong><?= $product->class_id != null && $product->class_id == 1 ? '- Express' : '- Economy' ?></strong>
									@endif
									</td>
									<td class="text-center">{{ $product->actual_weight }}</td>
									<td class="text-center">
										{{ roundwt($product->chargable_weight) }} KG - <br /> [<strong>{{ $product->l }} L</strong> X
                        				<strong>{{ $product->w }} W</strong> X <strong>{{ $product->h }} H</strong>]
									</td>
                           <td class="text-center">{{$product->amount}}</td>
                        </tr>
								@endforeach
                        <tr class="line">
                           <td colspan="9" class="text-right">Gross Amount</td>
                           <td class="text-center">₹ {{ $invoice->gross_amount }}</td>
                        </tr>
                        <tr class="line">
                           <td colspan="6">Temp Global Surcharge- Minimum Rs. 73/- ++ , Then 57/- ++per kgs onwards <span</td>
                           <td colspan="3" class="text-right">Temp Global Surcharge</td>
                           <td class="text-center">₹ {{ $invoice->tgsc }}</td>
                        </tr>
                        <tr class="line">
                           <td colspan="9" class="text-right">Fuel Surcharge Index</td>
                           <td class="text-center">₹ {{ $invoice->fuel_surcharge }}</td>
                        </tr>
                        @if ($invoice->custom_clearance != 0)
                        <tr class="line">
                           <td colspan="9" class="text-right">Custom Clerance</td>
                           <td class="text-center">₹ {{ $invoice->custom_clearance }}</td>
                        </tr>
                        @endif
                        @if ($invoice->oda_charge != 0)
                        <tr class="line">
                           <td colspan="9" class="text-right">ODA Charges</td>
                           <td class="text-center">₹ {{ $invoice->oda_charge }}</td>
                        </tr>
                        @endif
                        <tr class="line">
                           <td colspan="9" class="text-right">Packing Charges</td>
                           <td class="text-center">₹ 0</td>
                        </tr>
                        <tr class="line">
                           <td colspan="9" class="text-right">AD Code Registration Charges</td>
                           <td class="text-center">₹ {{ $invoice->ad_code_registration_charge ?? 0 }}</td>
                        </tr>
                        <tr class="line">
                           <td colspan="9" class="text-right">IFSC/DBK Registration Charges</td>
                           <td class="text-center">₹ {{ 0 }}</td>
                        </tr>
                        @if($invoice->adc_noc_charge != 0)
                        <tr class="line">
                           <td colspan="9" class="text-right">ADC NOC Charge</td>
                           <td class="text-center">₹ {{ $invoice->adc_noc_charge }}</td>
                        </tr>
                        @endif
                        @if($invoice->do_charge != 0)
                        <tr class="line">
                           <td colspan="9" class="text-right">DO Charges</td>
                           <td class="text-center">₹ {{ $invoice->do_charge }}</td>
                        </tr>
                        @endif
                        @if($invoice->non_conveyar_charge != 0)
                        <tr class="line">
                           <td colspan="9" class="text-right">NON Conveyar Charges</td>
                           <td class="text-center">₹ {{ $invoice->non_conveyar_charge }}</td>
                        </tr>
                        @endif
                        @if($invoice->address_correction_charge != 0)
                        <tr class="line">
                           <td colspan="9" class="text-right">Address Correction Charges</td>
                           <td class="text-center">₹ {{ $invoice->address_correction_charge }}</td>
                        </tr>
                        @endif
                        @if($invoice->war_surcharge != 0)
                        <tr class="line">
                           <td colspan="9" class="text-right">WAR Surcharges Charges</td>
                           <td class="text-center">₹ {{ $invoice->war_surcharge }}</td>
                        </tr>
                        @endif
                        @if($invoice->air_cargo_registration_charge != 0)
                        <tr class="line">
                           <td colspan="9" class="text-right">Air Cargo Registration Charges</td>
                           <td class="text-center">₹ {{ $invoice->air_cargo_registration_charge }}</td>
                        </tr>
                        @endif
                        @if($invoice->warehousing_charge != 0)
                        <tr class="line">
                           <td colspan="9" class="text-right">Warehouse Charges</td>
                           <td class="text-center">₹ {{ $invoice->warehousing_charge }}</td>
                        </tr>
                        @endif
                        <tr class="line">
                           <td colspan="9" class="text-right">CGST (9%)</td>
                           <td class="text-center">₹ {{ $invoice->cgst_amount ?? 0 }}</td>
                        </tr>
                        <tr class="line">
                           <td colspan="7">Temp Global Surcharge- 150/- ++per kgs onwards</td>
                           <td colspan="2" class="text-right">SGST (9%)</td>
                           <td class="text-center">₹ {{ $invoice->sgst_amount ?? 0 }}</td>
                        </tr>
                        
                        <tr class="line">
                           <td colspan="9" class="text-right">IGST (18%)</td>
                           <td class="text-center">₹ {{ $invoice->igst_amount ?? 0 }}</td>
                        </tr>
                        <tr class="line">
                           <td colspan="9" class="text-right">Freight Amount</td>
                           <td class="text-center">₹ {{ $invoice->freight_amount ?? 0 }}</td>
                        </tr>
                        <tr class="line">
                           <td colspan="9" class="text-right">Duty Payment</td>
                           <td class="text-center">₹ {{ $invoice->duty_payment ?? 0 }}</td>
                        </tr>
                        <tr class="line">
                           <td colspan="7"><strong>Rupees In Words <strong> : {{ ucwords($amountinword) }}</td>
                           <td colspan="2" class="text-right"><strong>Net Amount</strong></td>
                           <td class="text-center"><strong>₹ {{ $invoice->net_amount ?? 0 }}</strong></td>
                        </tr>   
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 text-right identity">
                  <p>For Madni International<br/><br/><strong>Authorized Signatory</strong></p>
               </div>
               <div class="col-md-12">
                  <p><strong>Terms & Conditions :</strong></p>
               <ol>
               <li>Payment of bills should be made only by an Account Payee Cheque / Demand Draft in favour of<u><b> “MADNI INTERNATIONAL” </b></u></li>
               <li>Any payment received after the due date may attract late payment charges of 2% per month</li>
               <li>PAN No-<b>AJFPB7353M </b>and Goods &amp; Service Tax No<b>-27AJFPB7353M1ZZ, HSN CODE-9968, STATE-27</b></li>
               <li>WE ARE NOT COMMON CARRIERS. ALL TRANSACTIONS ARE SUBJECT TO THE CONDITIONS ENDORSED ON THE REVERSE OF OUR CONSIGNMENT NOTE</li>
               <li>ANY DISCREPANCIES SHOULD BE NOTIFIED WITHIN SEVEN DAYS OF RECEIPT OF THIS INVOICE</li>
               <li>Any kind of disputes subject to Nagpur Jurisdiction</li>
               <li>This is the system generated INVOICE and dose not require any signature</li>
               </ol>
            </div>
         </div>
            <div class="row">
               <div class="col-md-12 text-center">
                  <img width="100%" height="45" src="data:image/png;base64,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duIJE8YTwFi27AO6+6670LfvNqioqMBee++F2t69ac+99uLRTY32yzWffroGjz/2GDc1fUpTdppCU6fuwuXl5QjDEM899zylUp1cWVlJn366Bocddqj5Dz783HPP0/vvvc9EwKTJkzF58iSUlZUBADU2NKCtrS1iczmbxP4HHoiKigpk/3U686uvvopPP/0Uba3tSKdTPONrM6gmawM6bzjuod5H+Llm7JxqdsXvIrHExAsRQ+xGwegoxwP53xcUfufLoRFasl/GN8THhc2GkyeORJooMiIxXMUUm/PMdZUrocb4cIp8iUXjlJso47kPJ1uM53KwrFE0Tr7mw0nm0S2Okxm/tXDKjdviOAlc3BNNc2KauyadzxIzDiYUcoKPqKidRRCL48wVc2xBp8CxtK22gq9aLDteKil0sYsPOLdg5e7WKWDUdR+gVjdZFLK7U43sHCS2nkLJwUe8QuCjjcgxRImTeW/GCB4Ozr71Fn3e250W2PwOXa+zldsEnfyU/LorbKQN2GsenKxzCXzgoaF/b1LqxVIeJZfGidR126f0cnDiPBPnBFFA4yQtgZO1cw9O+pkyZ9Mh5jg4VVRU4Nb//m++8fe/x0cfLcfPL7uMfv6zy6mp6VP6w+9+R2VlZUgkE3j4wYdwwy+vQ0NDI3568SW44vLLubl5PS6/9DJ+6sknmYj49Vdfxc9+eik3NDTSdb+8DlddcQW99957uOnGG3H7rbeiLJmkMAwd7DKZDG656SZce8019OYbc/GXP9+B0087jV977TX87a9/xeWX/Sz7DWNm/njlxxi5ww7c0NiIs884k958801mZjQ1NeLUU06hV159FRXl5cik0wCyQa+hoRHXXnUV//fNt2D5ihV8/S9/Qf944B8AQIlEAn+9805+5OGH7f8/f+I//8Fb8+YjCAIigP/w+9/ztVdfjYULF+Leu+/hH198MTpTKYQhE8BE2X9xSAwglUrjvO+fh7v++jfsvvtuuOfue3Dxjy62p4O333ob//hHF/Ndf78LbW1tICK67dZbce01V9P7772H++67D2efeRbCMKQgCKhhdQMqKyqopbUV5517Ll5++ZVsgqGcvxFMVQQi4scfe4z+duffGMxoavqUTzn5ZLz++us0fvyOfPlll/EN199gTxVvveUWXHPlVZg//y3+/W9/izlPPglm5lQqhUWLFvHw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" />
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script type="text/javascript"></script>
   </body>
</html>
@php

function roundwt($price)
{
    $intVal = intval($price);
    $difference = $price - $intVal;
    // dd($difference);

    if ($difference < 0.5 && $difference != 0) {
        $requiredval = 0.5 - $difference;
        $price = $price + $requiredval;
        $finalvalue = number_format($price, 2);
        // dd($finalvalue);
        return $finalvalue;
    }

    if ($difference >= 0.51 && $difference != 0) {
        $finalvalue = ceil($price);
        return $finalvalue;
    }
    if ($difference == 0 || ($difference = 0.0)) {
        $finalvalue = $price;
        return $finalvalue;
    }
}
@endphp

<script type="text/javascript">
   let savedoc = new jsPDF('#pdf','pt','a4');

   savedoc.addHTML(document.body,function() {
      // savedoc.save('madniinvoice.pdf');
   });

   var doc = new jsPDF();

   function saveDiv(divId, title) {
      doc.fromHTML(`<html><head><title>${title}</title></head><body>` + document.getElementById(divId).innerHTML + `</body></html>`);
      doc.save('div.pdf');
   }

   function printDiv(divId,title) {
      let mywindow = window.open('', 'PRINT', 'height=100%,width=100%,top=50,left=50');
      mywindow.document.write(`<html><head><title>${title}</title>`);
      mywindow.document.write('</head><body >');
      mywindow.document.write(document.getElementById(divId).innerHTML);
      mywindow.document.write('</body></html>');

      mywindow.document.close(); // necessary for IE >= 10
      mywindow.focus(); // necessary for IE >= 10*/

      mywindow.print();
      mywindow.close();
      return true;
   }
</script>
