<?php
	include "sys.php";
	$title = $cmd . " windows cmd | dos";
	include "header.php";
	include "nav-win-dos.php";
?>

<h2><i class="fab fa-windows"></i> windows cmd / dos</h2>
<section>
	<article id="introduction">
		<hr>
		<h3><i class="far fa-play-circle"></i> <?=$introduction?></h3>
		<hr>
		<h4>How to run command prompt in Windows?</h4>
		<ol>
			<li>Start > Programs > Accessories > Command prompt</li>
			<li>Start > write <em>command prompt</em> or <em>cmd.exe</em></li>
		</ol>
		<h4>How to run DOS on modern computer?</h4>
		<ol>
			<li>emulator, e.g. <a target="_blank" href="https://www.dosbox.com">DOSBox</a></li>
			<li>virtual machine, e.g. <a target="_blank" href="https://www.virtualbox.org/">VirtualBox</a></li>
			<li>"modern DOS" - <a target="_blank" href="http://freedos.org/">FreeDOS</a></li>
		</ol>
	</article>
	<article id="dos-based-windows-vs-windows-nt">
		<hr>
		<h3><i class="fas fa-not-equal"></i> DOS-based Windows vs Windows NT</h3>
		<hr>
		<h4>DOS vs DOS-based Windows vs Windows NT</h4>
		<table class="normal">
			<tr>
				<th>class</th>
				<td rowspan="3">DOS</td>
				<td colspan="2">DOS-based Windows</td>
				<td rowspan="3" colspan="2">Windows NT family</td>
			</tr>
			<tr>
				<th>operating system</th>
				<td>DOS</td>
				<td>DOS / Windows 9x</td>
			</tr>
			<tr>
				<th>operating environment</th>
				<td>Windows 1-3</td>
				<td>Windows 9x</td>
			</tr>
			<tr>
				<th>x-bit OS</th>
				<td colspan="2">16</td>
				<td>16/32</td>
				<td>32</td>
				<td>64</td>
			</tr>
			<tr>
				<th>x-bit programs run</th>
				<td colspan="2">16</td>
				<td>16/32</td>
				<td>16/32</td>
				<td>32/64</td>
			</tr>
			<tr>
				<th>command interpreter</th>
				<td colspan="3">COMMAND.COM</td>
				<td>COMMAND.COM<br>cmd.exe<br>PowerShell</td>
				<td>cmd.exe<br>PowerShell</td>
			</tr>
			<tr>
				<th>DOS programs run</th>
				<td colspan="3">natively</td>
				<td>in virtual machine - <a target="_blank" href="https://en.wikipedia.org/wiki/Virtual_DOS_machine#Windows_NTVDM">NTVDM</a></td>
				<td>-</td>
			</tr>
			<tr>
				<th>multitasking</th>
				<td>-</td>
				<td>cooperative</td>
				<td>16-bit - cooperative<br>32-bit - preemptive</td>
				<td colspan="2">preemptive</td>
			</tr>
			<tr>
				<th>file system</th>
				<td colspan="2">FAT12<br>FAT16</td>
				<td>FAT16<br>VFAT<br>FAT32</td>
				<td colspan="2">NTFS</td>
			</tr>
			<tr>
				<th>file name length</th>
				<td colspan="2">8 + 3</td>
				<td>255</td>
				<td colspan="2">255</td>
			</tr>
		</table>
		<div class="float-right">
			<p>
				* Windows 1-3: 1.x, 2.x, 3.x<br>
				* Windows 9x: 95, 98, Me<br>
				* DOS-based Windows: 1.x, 2.x, 3.x, 95, 98, Me<br>
				* Windows NT family: NT, 2000, XP, Vista, 7, 8, 10, Server<br>
				* PowerShell: in Windows 7 and later<br>
				* FAT32: supported in Windows 95 OSR2 and later Win9x
			</p>
		</div>
		<div class="clear"></div>
		<h4>cmd.exe vs COMMAND.COM vs FREECOM.COM</h4>
		<table class="normal">
			<tr>
				<th>command interpreter</th>
				<td>cmd.exe</td>
				<td>COMMAND.COM</td>
				<td>FREECOM.COM</td>
			</tr>
			<tr>
				<th>operating system</th>
				<td>Windows NT</td>
				<td>MS-DOS<br>DOS-based Windows<br>Windows NT 32-bit</td>
				<td>FreeDOS</td>
			</tr>
			<tr>
				<th>autocomplete</th>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<th>file name length</th>
				<td>255</td>
				<td>8 + 3</td>
				<td>255</td>
			</tr>
		</table>

		<h4>MS-DOS 6.22 vs FreeDOS 1.2</h4>
		<table class="normal">
			<tr>
				<th>operating system</th>
				<td>MS-DOS 6.22</td>
				<td>FreeDOS 1.2</td>
			</tr>
			<tr>
				<th>command interpreter</th>
				<td>COMMAND.COM</td>
				<td>FREECOM.COM</td>
			</tr>
			<tr>
				<th>supported file systems</th>
				<td>FAT12<br>FAT16</td>
				<td>FAT16<br>VFAT<br>FAT32</td>
			</tr>
			<tr>
				<th>disk size</th>
				<td>up to 2GB</td>
				<td>up to 128GB / 2TB</td>
			</tr>
			<tr>
				<th>memory manager</th>
				<td>HIMEM<br>EMM386</td>
				<td>HIMEMX<br>JEMM386</td>
			</tr>
			<tr>
				<th>multi-boot</th>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<th>advanced power managment</th>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<th>release year</th>
				<td>1994</td>
				<td>2016</td>
			</tr>
			<tr>
				<th>source model</th>
				<td>closed source</td>
				<td>open source (GNU GPL)</td>
			</tr>
		</table>

		<h4>MS-DOS versions</h4>
		<table class="normal">
			<tr>
				<th>version</th>
				<th>supported file systems</th>
				<th>HDD maximum size</th>
				<th>5.25" floppy disk support</th>
				<th>3.5" floppy disk support</th>
				<th>year</th>
			</tr>
			<tr>
				<td>1.1</td>
				<td>FAT12</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>360KB</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>1982</td>
			</tr>
			<tr>
				<td>2.0</td>
				<td>FAT12</td>
				<td>10MB</td>
				<td>360KB</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>1983</td>
			</tr>
			<tr>
				<td>3.0</td>
				<td>FAT12</td>
				<td>32MB</td>
				<td>360KB 1.2MB</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td>1984</td>
			</tr>
			<tr>
				<td>3.2</td>
				<td>FAT12</td>
				<td>32MB</td>
				<td>360KB 1.2MB</td>
				<td>360KB</td>
				<td>1986</td>
			</tr>
			<tr>
				<td>3.3</td>
				<td>FAT12</td>
				<td>32MB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB</td>
				<td>1987</td>
			</tr>
			<tr>
				<td>4.0</td>
				<td>FAT12 FAT16</td>
				<td>2GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB</td>
				<td>1988</td>
			</tr>
			<tr>
				<td>5.0</td>
				<td>FAT12 FAT16</td>
				<td>2GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB 2.88MB</td>
				<td>1991</td>
			</tr>
			<tr>
				<td>6.0</td>
				<td>FAT12 FAT16</td>
				<td>2GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB 2.88MB</td>
				<td>1994</td>
			</tr>
			<tr>
				<td>6.2</td>
				<td>FAT12 FAT16</td>
				<td>2GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB 2.88MB</td>
				<td>1994</td>
			</tr>
			<tr>
				<td>6.22</td>
				<td>FAT12 FAT16</td>
				<td>2GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB 2.88MB</td>
				<td>1994</td>
			</tr>
			<tr>
				<td>7.0 (Windows 95A)</td>
				<td>FAT12 FAT16</td>
				<td>2GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB 2.88MB</td>
				<td>1995</td>
			</tr>
			<tr>
				<td>7.1x (Windows 95B, 95C, 98, 98SE)</td>
				<td>FAT12 FAT16 FAT32</td>
				<td>124.55GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB 2.88MB</td>
				<td>1996</td>
			</tr>
			<tr>
				<td>8.0 (Windows Me)</td>
				<td>FAT12 FAT16 FAT32</td>
				<td>124.55GB</td>
				<td>360KB 1.2MB</td>
				<td>360KB 1.44MB 2.88MB</td>
				<td>2000</td>
			</tr>
		</table>

		<h4>Windows NT versions</h4>
		<table class="normal">
			<tr>
				<th>version</th>
				<th>name</th>
				<th>year</th>
			</tr>
			<tr>
				<td>3.1</td>
				<td>Windows NT 3.1</td>
				<td>1993</td>
			</tr>
			<tr>
				<td>3.5</td>
				<td>Windows NT 3.5</td>
				<td>1994</td>
			</tr>
			<tr>
				<td>3.51</td>
				<td>Windows NT 3.51</td>
				<td>1995</td>
			</tr>
			<tr>
				<td>4.0</td>
				<td>Windows NT 4.0</td>
				<td>1996</td>
			</tr>
			<tr>
				<td>5.0</td>
				<td>Windows 2000</td>
				<td>2000</td>
			</tr>
			<tr>
				<td>5.1</td>
				<td>Windows XP</td>
				<td>2001</td>
			</tr>
			<tr>
				<td>5.2</td>
				<td>Windows XP 64-bit Edition<br>Windows Server 2003<br>Windows Server 2003 R2</td>
				<td>2005<br>2003<br>2005</td>
			</tr>
			<tr>
				<td>6.0</td>
				<td>Windows Vista<br>Windows Server 2008</td>
				<td>2006<br>2008</td>
			</tr>
			<tr>
				<td>6.1</td>
				<td>Windows 7<br>Windows Server 2008 R2</td>
				<td>2009</td>
			</tr>
			<tr>
				<td>6.2</td>
				<td>Windows 8<br>Windows Server 2012</td>
				<td>2012</td>
			</tr>
			<tr>
				<td>6.3</td>
				<td>Windows 8.1<br>Windows Server 2012 R2</td>
				<td>2013</td>
			</tr>
			<tr>
				<td>10.0</td>
				<td>Windows 10<br>Windows Server 2016<br>Windows Server 2019</td>
				<td>2015<br>2016<br>2018</td>
			</tr>
		</table>
	</article>
	<article id="keyboard-shortcuts">
		<hr>
		<h3><i class="far fa-keyboard"></i> <?=$keyboardShortcuts?></h3>
		<hr>
		<ul>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>del</kbd> - reboot the system</li>
			<li><kbd>ctrl</kbd> + <kbd>c</kbd> - cancel the current task</li>
			<li><kbd>ctrl</kbd> + <kbd>s</kbd> - stop the text</li>
		</ul>
	</article>
	<article id="partitions-drives">
		<hr>
		<h3><i class="far fa-hdd"></i> <?=$partitionsDrives?></h3>
		<hr>
<?php if ($lang == "en") { ?>
		<p>Sample numbering of partitions and drives</p>
		<ul>
			<li>A - floppy disk drive no. 1</li>
			<li>B - floppy disk drive no. 2</li>
			<li>C - partition no. 1</li>
			<li>D - partition no. 2</li>
			<li>E - CD / DVD drive</li>
			<li>F - removable drive</li>
		</ul>
<?php } else { ?>
		<p>Przykładowa numeracja partycji i napędów</p>
		<ul>
			<li>A - stacja dyskietek nr 1</li>
			<li>B - stacja dyskietek nr 2</li>
			<li>C - partycja nr 1</li>
			<li>D - partycja nr 2</li>
			<li>E - partycja nr 3</li>
			<li>F - napęd CD / DVD</li>
			<li>G - napęd wymienny</li>
		</ul>
<?php } ?>
	</article>
	<article id="mounting-partitions-drives">
		<hr>
		<h3><i class="fa fa-eject fa-fw"></i> DOSBox - <?=$mountingPartitionsDrives?></h3>
		<hr>
		</table>
		<h4>Mount directories</h4>
		<p><code>mount c ~/Apps</code> - Linux</p>
		<p><code>mount c c:/Apps</code> - Windows</p>
		<h4>Mount CD-ROM drive</h4>
		<p><code>mount d /media -t cdrom</code> - Linux</p>
		<p><code>mount d d: -t cdrom</code> - Windows</p>
		<h4>Mount virtual drive - iso file</h4>
		<p><code>imgmount d ~/DOS/WORMS.DAT -t iso</code> - Linux</p>
		<p><code>imgmount d c:/DOS/WORMS.DAT -t iso</code> - Windows</p>
	</article>
	<article id="directory-structure">
		<hr>
		<h3><i class="fas fa-sitemap"></i> <?=$directoryStructure?></h3>
		<hr>
		<h4>Windows 10 64-bit (NT 10.0)</h4>
<pre style="background-color: inherit; color: inherit;">
C:
├── Program Files
├── Program Files (x86)
├── ProgramData
├── Users
└── Windows
</pre>
		<h4>Windows XP 32-bit (NT 5.1)</h4>
<pre style="background-color: inherit; color: inherit;">
C:
├── Documents and Settings
├── Program Files
└── WINDOWS
</pre>
		<h4>FreeDOS 1.2</h4>
<pre style="background-color: inherit; color: inherit;">
C:
├── FDOS
├── AUTOEXEC.BAT
├── COMMAND.COM
├── CONFIG.SYS
├── FDCONFIG.SYS
└── KERNEL.SYS
</pre>
	</article>
	<article id="commands">
		<hr>
		<h3><i class="fa fa-question fa-fw"></i> <?=$commands?></h3>
		<hr>
		<!--<ul>
			<li>help</li>
			<li>&lt;command&gt; /?</li>
			<li>&lt;command&gt; /h</li>
			<li>&lt;command&gt; /help</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win CMD</th>
				<th>DOS</th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>help</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>&lt;command&gt; /?</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
		</table>
	</article>
	<article id="browsing-directories">
		<hr>
		<h3><i class="far fa-folder-open fa-fw"></i> <?=$browsingDirectories?></h3>
		<hr>
		<!--<ul>
			<li>dir</li>
			<li>cd / chdir</li>
			<li>tree</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win CMD</th>
				<th>DOS</th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>dir</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>cd / chdir</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>tree</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
		</table>
	</article>
	<article id="folders-files-manipulation">
		<hr>
		<h3><i class="far fa-copy fa-fw"></i> <?=$foldersFilesManipulation?></h3>
		<hr>
		<!--<ul>
			<li>copy</li>
			<li>diskcopy</li>
			<li>xcopy</li>
			<li>move</li>
			<li>ren</li>
			<li>del</li>
			<li>deltree</li>
			<li>undelete</li>
			<li>md / mkdir</li>
			<li>rd / rmdir</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win CMD</th>
				<th>DOS</th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>copy</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>diskcopy</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>xcopy</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>move</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>ren</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>del</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>deltree</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>undelete</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>md / mkdir</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>rd / rmdir</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
		</table>
	</article>
	<article id="reading-files">
		<hr>
		<h3><i class="far fa-file-alt"></i> <?=$readingFiles?></h3>
		<hr>
		<!--<ul>
			<li>type</li>
			<li>more</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win CMD</th>
				<th>DOS</th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>type</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>more</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
		</table>
	</article>
	<article id="console">
		<hr>
		<h3><i class="fa fa-terminal fa-fw"></i> <?=$console?></h3>
		<hr>
		<!--<ul>
			<li>cls</li>
			<li>prompt</li>
			<li>mode</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win CMD</th>
				<th>DOS</th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>cls</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>prompt</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>mode</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>alias</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
		</table>
		<pre>mode con lines=40</pre>
	</article>
	<article id="powerSession">
		<hr>
		<h3><i class="fa fa-power-off"></i> <?=$powerSession?></h3>
		<hr>
		<!--<ul>
			<li>exit</li>
			<li>reset</li>
			<li>reboot</li>
			<li>poweroff</li>
			<li>halt</li>
			<li>shutdown</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win CMD</th>
				<th>MS-DOS</th>
				<th>FreeDOS</th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>exit</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>shutdown</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>poweroff</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>halt</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>reboot</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>reset</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>	
		</table>
	</article>
	<article id="file-system">
		<hr>
		<h3><i class="far fa-hdd fa-fw"></i> <?=$fileSystem?></h3>
		<hr>
		<!--<ul>
			<li>attrib</li>
			<li>vol</li>
			<li>label</li>
			<li>chkdsk</li>
			<li>fdisk</li>
			<li>format</li>
			<li>mount</li>
			<li>imgmount</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win CMD</th>
				<th>DOS</th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>attrib</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>vol</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>label</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>chkdsk</td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>fdisk</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>format</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>mount</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>imgmount</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
		</table>
	</article>
	<article id="system">
		<hr>
		<h3><i class="fa fa-laptop"></i> system</h3>
		<hr>
		<!--<ul>
			<li>ver</li>
			<li>date</li>
			<li>time</li>
			<li>mem</li>
			<li>path</li>
			<li>set</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win CMD</th>
				<th>DOS</th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>ver</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>date</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>time</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>mem</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>path</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>set</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
		</table>
	</article>
	<article id="network">
		<hr>
		<h3><i class="fa fa-globe fa-fw"></i> <?=$network?></h3>
		<hr>
		<!--<ul>
			<li>ipconfig</li>
			<li>ping</li>
			<li>tracert</li>
			<li>route</li>
			<li>netstat</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win CMD</th>
				<th>DOS</th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>ipconfig</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>ping</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>tracert</td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>route</td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>ipconfig</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-question fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
		</table>
	</article>
	<article id="text-editors">
		<hr>
		<h3><i class="fa fa-align-left fa-fw"></i> <?=$textEditors?></h3>
		<hr>
		<!--<ul>
			<li>edlin</li>
			<li>edit</li>
		</ul>-->
		<table>
			<tr>
				<th></th>
				<th>Win CMD</th>
				<th>DOS</th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>edlin</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
			<tr>
				<td>edit</td>
				<td><i class="fa fa-times fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-times fa-fw"></i></td>
			</tr>
		</table>
	</article>
	<article id="file-managers">
		<hr>
		<h3><i class="far fa-copy fa-fw"></i> <?=$fileManagers?></h3>
		<hr>
		<ul>
			<li>DOS Shell</li>
			<li>Norton Commander</li>
			<li>DOS Navigator</li>
		</ul>
	</article>
	<article id="useful-programs">
		<hr>
		<h3><i class="far fa-window-maximize"></i> <?=$usefulPrograms?></h3>
		<hr>
		<ul>
			<li>Arachne</li>
			<li>MPXPlayer</li>
		</ul>
	</article>
	<article id="batch-files">
		<hr>
		<h3><i class="fa fa-save fa-fw"></i> <?=$batchFiles?></h3>
		<hr>
		<!--<ul>
			<li>.bat</li>
			<li>.cmd</li>
		</ul>-->
		<table>
			<tr>
				<th>Win CMD</th>
				<th>DOS</th>
				<th>DOSBox</th>
			</tr>
			<tr>
				<td>.bat .cmd</td>
				<td>.BAT</td>
				<td>.BAT</td>
			</tr>
		</table>
	</article>
</section>

<?php include "footer.php"; ?>