import GachaDetail from '@/components/page/GachaDetail';
import { GachaItemType } from '@/types/types';
import { Metadata } from 'next';
import { notFound } from 'next/navigation';

type Props = {
  params: Promise<{ id: string }>
}

// アイテムのデータを取得
async function fetchItem(id: string) {
  try {
    const res = await fetch(`http://localhost:8000/api/gacha/${id}`);
    if (!res.ok) {
      return false;
    }
    return res.json();
  } catch(error) {
    return false;
  }
}

export async function generateMetadata({ params }: Props): Promise<Metadata> {
  const id = (await params).id;
  const item: GachaItemType = await fetchItem(id);
  const imagePath = `/assets/img/${item.result.id.toString().padStart( 2, '0')}_${item.result.code}.png`;

  if (!item) {
    return {
      title: 'エラー',
      description: 'エラー',
    };
  }

  return {
    title: `ガチャの結果は${item.result.item_name}`,
    description: `ガチャのレア排出確率は${item.rate}`,
    openGraph: {
      title: `ガチャの結果は${item.result.item_name}`,
      description: `ガチャのレア排出確率は${item.rate}`,
      url: `http://localhost:3000/gacha/${id}`,
      images: imagePath,
    },
    twitter: {
      card: 'summary_large_image',
      title: `ガチャの結果は${item.result.item_name}`,
      description: `ガチャのレア排出確率は${item.rate}`,
      images: imagePath,
    },
  };
}

export default async function PostPage({ params }: Props) {
  const item: GachaItemType = await fetchItem((await params).id);

  if (!item) {
    notFound();
  }

  return (
    <GachaDetail data={item} />
  );
}
