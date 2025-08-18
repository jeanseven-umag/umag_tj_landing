import { Flex } from "@mantine/core";
import bannerImg from '../../../../../public/images/tarif-banner.png';

export const TarifBanner = () => {
  return (
    <Flex direction='column' align='center'>
      <img className="tariffs-banner-img" src={bannerImg} alt="banner" />
      <h3 className="tariffs-banner-caption">Автоматизируй бизнес выгодно</h3>
      <p className="tariffs-banner-text"><span className="color-blue">Сэкономь 20%</span> при полугодовой оплате</p>
    </Flex>
  )
}