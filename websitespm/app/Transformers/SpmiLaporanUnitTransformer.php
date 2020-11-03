 <?php

namespace App\Transformers;

use App\SpmiLaporanUnit;
use League\Fractal\TransformerAbstract;

class  SpmiLaporanUnitTransformer extends TransformerAbstract
{
	public function transform(SpmiLaporanUnit $spmilaporanunit){
		return [
			'inst_unit' => $spmilaporanunit->user_id,
			'id' => $spmilaporanunit->id, 
			'kegiatan_rutin' => $spmilaporanunit->kegiatan_rutin,
			'kegiatan_non_rutin' => $spmilaporanunit->kegiatan_non_rutin,
			'serapan_anggaran' => $spmilaporanunit->serapan_anggaran,
			'pemasukan_dana' => $spmilaporanunit->pemasukan_dana,
			'evaluasi_kegiatan' => $spmilaporanunit->evaluasi_kegiatan,
			'rencana_kerja_bulan_berikutnya' => $spmilaporanunit->rencana_kerja_bulan_berikutnya,
			'unggah_dokumen' => $spmilaporanunit->unggah_dokumen,
			'published' => $spmilaporanunit->created_at->diffForHumans(),
		];
	}
} 