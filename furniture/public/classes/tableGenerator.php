<?php
//create table for adminfurniture
class TableGenerator 
{
	private $headings;
	private $rows =[];
	private $archive;
	
	public function setHeadings($headings)
	{
		$this->headings = $headings;
	}
	public function setArchive($archive) {
		$this->archive = $archive;
	}
	public function addRow($row)
	{
		$this->rows[]= $row;
	}
	public function getHTML()
	{
		$table = '<table border=1>';
		$table = $table . '<thead>';
 		$table = $table . '<tr>';
 		foreach ($this->headings as $row) {
 			if ($row=="Edit" || $row=="Archive" || $row=="Delete") {
 				$table.='<th style="width: 5%">&nbsp;</th>';
 			}
 			elseif ($row=="Price") {
 				$table.='<th style="width: 10%">Price</th>';
 			}
 			else{
 				$table.='<th>'.$row.'</th>'; 
 			}		
		}
		$table.="</tr>";
		$table.='</thead>';
		$table.='<tbody>';

		foreach ($this->rows as $r) {
			$table.='<tr>';
			foreach ($r as $key => $value) {
				if (!is_numeric($key)) {
					// print_r($value);
					$table.='<td>'.$value.'</td>';
				}	
			}
			if($this->archive == 'yes'){
					$table.='<td><a href="adminfurniture?id=' . $r['id'] . '">Archive</a></td>';
				}
				else {
					$table.='<td><a href="archivefurniture?id=' . $r['id'] . '">Undo Archive</a></td>';
				}
			$table.='<td width:10%><a href="editfurniture?id=' . $r['id'] . '">Edit</a></td>';
			$table.='<td><form method="post" action="deletefurniture?id=' . $r['id'] . '">
						<input type="hidden" name="id" value="' . $r['id'] . '" />
						<input type="submit" name="submit" value="Delete" />
						</form></td>';
			$table.='</tr>';
		}
		$table.='</tbody>';
		$table.='</table>';
		return $table;
	}

}



?>