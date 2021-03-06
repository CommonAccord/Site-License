Source=<a href="http://www.ott.nih.gov/sites/default/files/documents/pdfs/slaform.pdf">NIH Form (pdf)</a>

Doc.Title=Simple Letter Agreement for the Transfer of Materials

0.sec=In response to RECIPIENT’s request for the MATERIAL {Material.Description} the PROVIDER asks that the RECIPIENT and the RECIPIENT SCIENTIST agree to the following before the RECIPIENT receives the MATERIAL:

1.sec=The above MATERIAL is the property of the PROVIDER and is made available as a service to the research community. 

2.sec=THIS MATERIAL IS NOT FOR USE IN HUMAN SUBJECTS. 

3.sec=The MATERIAL will be used for teaching or not-for-profit research purposes only. 

4.sec=The MATERIAL will not be further distributed to others without the PROVIDER's written consent. The RECIPIENT shall refer any request for the MATERIAL to the PROVIDER. To the extent supplies are available, the PROVIDER or the PROVIDER SCIENTIST agree to make the MATERIAL available, under a separate Simple Letter Agreement to other scientists for teaching or not-for-profit research purposes only.

5.sec=The RECIPIENT agrees to acknowledge the source of the MATERIAL in any publications reporting use of it.

6.1.sec=Any MATERIAL delivered pursuant to this Agreement is understood to be experimental in nature and may have hazardous properties.

6.2.sec=THE PROVIDER MAKES NO REPRESENTATIONS AND EXTENDS NO WARRANTIES OF ANY KIND, EITHER EXPRESSED OR IMPLIED. THERE ARE NO EXPRESS OR IMPLIED WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE, OR THAT THE USE OF THE MATERIAL WILL NOT INFRINGE ANY PATENT, COPYRIGHT, TRADEMARK, OR OTHER PROPRIETARY RIGHTS. 

6.3.sec=Unless prohibited by law, Recipient assumes all liability for claims for damages against it by third parties which may arise from the use, storage or disposal of the Material except that, to the extent permitted by law, the Provider shall be liable to the Recipient when the damage is caused by the gross negligence or willful misconduct of the Provider.

6.sec={6.1.sec}<br>{6.2.sec}<br>{6.3.sec}

7.sec=The RECIPIENT agrees to use the MATERIAL in compliance with all applicable statutes and regulations. 

8.sec=The MATERIAL is provided at no cost, or with an optional transmittal fee solely to reimburse the PROVIDER for its preparation and distribution costs. If a fee is requested, the amount will be indicated here: {Fee.$} 

=[Z/Sec/s8]

DocBody={Doc}

90.sec={Sign.Intro}<br><br>{P1.Sign.Sec}<br><br>{P2.Sign.Sec}

Sign.Intro=The PROVIDER, RECIPIENT and RECIPIENT SCIENTIST must sign both copies of this letter and return one signed copy to the PROVIDER. The PROVIDER will then send the MATERIAL. 

P1.Sign.Ti=<span style="text-transform: uppercase">{P1.Handle}</span> INFORMATION and AUTHORIZED SIGNATURE:

P1.Sign.1.sec={P1.Handle} Scientist: {P1.Scientist.Name.Full}

P1.Sign.2.sec={P1.Handle} Organization:  {P1.Name.Full} <br>Address: {P1.Addr.1,2} <br>Name of Authorized Official: {P1.Officer.Name.Full} <br>Title of Authorized Official: {P1.Officer.Title} 

P1.Sign.3.sec=Certification of Authorized Official: This Simple Letter Agreement {has/has not} been modified.<br>{P1.Officer.xSignature}<br> Signature of Authorized Official<br>{P1.Sign.YMD}<br> Date 

P1.Sign.=[Z/Sec/s3]

P1.Handle=Provider

P2.Handle=Recipient

P2.Sign.Ti=<span style="text-transform: uppercase">{P2.Handle}</span> INFORMATION and AUTHORIZED SIGNATURE:

P2.Sign.1.sec={P2.Handle} Scientist: {P2.Scientist.Name.Full}

P2.Sign.2.sec={P2.Handle} Organization:  {P2.Name.Full} <br>Address: {P2.Addr.1,2} <br>Name of Authorized Official: {P2.Officer.Name.Full} <br>Title of Authorized Official: {P2.Officer.Title} 

P2.Sign.3.sec=Certification of Recipient Scientist: I have read and understood the conditions outlined in this Agreement and I agree to abide by them in the receipt and use of the MATERIAL. <br>{P2.Scientist.xSignature} <br>Date<br>{P2.Scientist.Sign.YMD} 

P2.Sign.=[Z/Sec/s3]